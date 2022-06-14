<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
    <tr>
        <th>{{__('messages.name_text')}}</th>
        <th>{{__('messages.bank_account_lbl')}}</th>
        <th>{{__('messages.wallet_balance_lbl')}}</th>

    </tr>
      </thead>
      <tbody>
      @foreach($Dressers as $key=>$val)
        <tr>
            <td>{{$val->name}}</td>
            <td>{{$val->bank_account_number?$val->bank_account_number:'-'}}</td>
            <td>{{(float)$val->wallet_total}}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </body>
</html>