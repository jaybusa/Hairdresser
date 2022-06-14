var express=require('express');
var app = express();
//var cors = require('cors');
var mysql = require('mysql');
const utils = require('./utils.js');
const util = new utils();
const ENV = require('./env.js');

const {
  mysqlConnection
} = require('./config');

//app.use(cors());

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/public/index.html');
});

var listport = 3001;
if (ENV != 'production') {
    listport = 3001;
}
var server = app.listen(listport, function(){
    console.log('listening on *:'+listport);
});
//socket code start
  //userOnline(1,5);

var io = require('socket.io')(server);

io.on('connection', function(socket){
  console.log("new client");

  socket.on('room', function(room){
    socket.join(room);
    console.log('join room:'+room);
  });

	// join user socket by user id
	socket.on('user_id', function (user_id,is_online) {
	    socket.join(user_id);
	    socket.user_id = user_id;
	    //console.log('socket user_id:' + user_id);
	  	//console.log('socket is_online:' + is_online);
 		userOnline(user_id,is_online);
	    //userOnline(user_id,1);
	});

	socket.on('send_lat_long', function (hairdresser_id,customer_id,lat,long) {
 		updateLatLong(hairdresser_id,lat,long);
	    try {
	  		io.to(customer_id).emit('receive_lat_long', {hairdresser_id:hairdresser_id,customer_id:customer_id,lat:lat,long:long});
	  	} catch (e) {
	  		 console.log('io message send to receive_lat_long erro:'+e);
	  	}

	});


  //socket disconnect
	socket.on('disconnect', function(){
	    console.log('disconnected');
	    console.log('disconnected --> '+ socket.user_id);
	    if(typeof socket.user_id !== 'undefined'){
	        if(socket.user_id > 0){
	        	//console.log('socket.user_id=',socket.user_id);
	            //userOnline(socket.user_id,0);
	            //userOnline(socket.user_id,2);
	        }
	    }
	});

    socket.on('error', function (err) {
        console.log(err);
    });


});

// io.on('disconnect', function(res){
//   console.log("disconnect"+res);
// });

io.on('close', function(res){
  console.log(" connection close"+res);
});

app.get('/send_notification', function (req, res) {
	//console.log('new_notifications get');
	if(req.query != "")
	{
		var data = req.query;

		console.log('query:'+req.query);
		console.log('user_id:'+req.query.user_id);
		console.log(JSON.stringify(req.query));
		//console.log('message:'+req.query.data_obj.message);
		try {
	  		io.to(req.query.user_id).emit('send_notification', {result:data});
	  	} catch (e) {
	  		 console.log('io message send to user erro:'+e);
	  	}
	}
	res.send('success');
});
//userOnline(1,2);

function userOnline(user_id,is_online) {
	if(is_online==1) {
		var sql = "UPDATE users SET is_online ="+is_online+",order_timeout_count=0 WHERE id ="+user_id;
	} else {
		var sql = "UPDATE users SET is_online ="+is_online+" WHERE id ="+user_id;

	}
	console.log(new Date()+' user_id:'+user_id+',is_online:'+is_online);
	  mysqlConnection.query(sql, function (err, result) {
	    if (err) throw err;
	    console.log(result.affectedRows + " record(s) updated");
	  });


}

function updateLatLong(hairdresser_id,lat,long) {
	console.log(new Date()+' hairdresser_id:'+hairdresser_id+',lat:'+lat+',long:'+long);
	var sql = "UPDATE users SET latitude="+lat+",longitude="+long+" WHERE id ="+hairdresser_id;
  mysqlConnection.query(sql, function (err, result) {
    if (err) throw err;
    console.log(result.affectedRows + " record(s) updated");
  });

}
