<style>
<?php if($config['dir']=="rtl") { ?>
.text-left { text-align:right;}
.text-right { text-align:left;}
<?php } else { ?>
.text-left { text-align:left;}
.text-right { text-align:right;}
<?php } ?>
table tr td { margin:10px;}
</style>

<div>
	<table class="invoice-title">
		<tr>
			<td>
				<h2><?php echo lang('invoice'); ?></h2>
			</td>
			<td class="text-right">
				<h3><?php echo lang('reference_no'); ?> <?php echo $invoice_data->id; ?></h3>
			</td>
		</tr>
	</table>
</div>
<div>
	<table border=1>
		<tr>
			<td>
				<address>
					<strong><?php echo lang('billed_to'); ?>:</strong><br>
					<?php echo $invoice_data->customer_name; ?><br>
					<?php echo $invoice_data->customer_email; ?><br>
					<?php echo $invoice_data->customer_phone; ?><br><br>
				</address>
				<address>
					<strong><?php echo lang('car_details'); ?>:</strong><br>
					<?php echo $invoice_data->car_id; ?><br>
					<?php echo lang('model'); ?>: <?php echo $invoice_data->model; ?>
				</address>
			</td>
			<td class="text-right">
				<address>
					<strong><?php echo lang('check_in_date'); ?>:</strong><br>
					<?php if(!empty($invoice_data->check_in)) echo date('j M, o g:i A',strtotime($invoice_data->check_in)); else echo lang('not_updated_yet'); ?><br><br>
				</address>
				<address>
					<strong><?php echo lang('check_out_date'); ?>:</strong><br>
					<?php if(!empty($invoice_data->check_out)) echo date('j M, o g:i A',strtotime($invoice_data->check_out)); else echo lang('not_updated_yet'); ?><br><br>
				</address>
			</td>
		</tr>
	</table>
</div>
<div>
	<h3 class="panel-title"><strong><?php echo lang('spare_part_summary'); ?></strong></h3>
	<hr>
	<table cellpadding="5" border="1">
												<thead>
													<tr>
														<td><strong><?php echo lang('name'); ?></strong></td>
														<td class="text-center"><strong><?php echo lang('hand_price'); ?></strong></td>
														<td class="text-center"><strong><?php echo lang('invoice_price'); ?></strong></td>
														<td class="text-right"><strong><?php echo lang('totals'); ?></strong></td>
													</tr>
												</thead>
												<tbody>
													<!-- foreach ($order->lineItems as $line) or some such thing here -->
													<?php
													$total_hand_price=0;
													$total_invoice_price=0;
													$net_total=0;
													if(!empty($spare_parts)) { foreach($spare_parts as $sparepart) {
														$single_total=$sparepart->hand_price+$sparepart->invoice_price;
														$total_hand_price += $sparepart->hand_price;
														$total_invoice_price += $sparepart->invoice_price;
														$net_total += $single_total;
														?>
													<tr>
														<td><?php echo $sparepart->name; ?></td>
														<td class="text-center"><?php echo number_format((float)$sparepart->hand_price)." ".lang('sar_currency'); ?></td>
														<td class="text-center"><?php echo number_format((float)$sparepart->invoice_price)." ".lang('sar_currency'); ?></td>
														<td class="text-right"><?php echo number_format((float)$single_total)." ".lang('sar_currency'); ?></td>
													</tr>
													<?php } } else { ?>
													<tr><td colspan="4"><span class="not-available"><?php echo lang('not_available'); ?></span></td></tr>
													<?php }
													$discounted=$net_total*($invoice_data->discount)/100;
													$total=$net_total-$discounted;
													?>
													
													<tr>
														<td class="thick-line"></td>
														<td class="thick-line"></td>
														<td class="thick-line text-center"><strong><?php echo lang('subtotal'); ?></strong></td>
														<td class="thick-line text-right"><?php echo number_format($net_total)." ".lang('sar_currency'); ?></td>
													</tr>
													<tr>
														<td class="no-line"></td>
														<td class="no-line"></td>
														<td class="no-line text-center"><strong><?php echo lang('discount')." <small>(".$invoice_data->discount." %)</small>"; ?></strong></td>
														<td class="no-line text-right"><?php echo number_format($discounted)." ".lang('sar_currency'); ?></td>
													</tr>
													<tr>
														<td class="no-line"></td>
														<td class="no-line"></td>
														<td class="no-line text-center"><strong><?php echo lang('total'); ?></strong></td>
														<td class="no-line text-right"><?php echo number_format($total)." ".lang('sar_currency'); ?></td>
													</tr>
												</tbody>
	</table>
</div>