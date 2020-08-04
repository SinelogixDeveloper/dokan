

<!DOCTYPE html>
<html>
	<head>
		<style>
			@import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);
			*{
			  margin: 0;
			  box-sizing: border-box;
			  -webkit-print-color-adjust: exact;
			}
			body{
			  background: ;
			  font-family: 'Roboto', sans-serif;
			}
			::selection {background: #f31544; color: #FFF;}
			::moz-selection {background: #f31544; color: #FFF;}
			.clearfix::after {
			    content: "";
			    clear: both;
			    display: table;
			}
			.col-left {
			    float: left;
			}
			.col-right {
			    float: right;
			}
			h1{
			  font-size: 1.5em;
			  color: #444;
			}
			h2{font-size: .9em;}
			h3{
			  font-size: 1.2em;
			  font-weight: 300;
			  line-height: 2em;
			}
			p{
			  font-size: .75em;
			  color: #666;
			  line-height: 1.2em;
			}
			a {
			    text-decoration: none;
			    color: #00a63f;
			}

			#invoiceholder{
			  width:100%;
			  height: 100%;
			  padding: 0px 0;
			}
			#invoice{
			  position: relative;
			  margin: 0 auto;
			  width: 700px;
			  background: #FFF;
			}

			[id*='invoice-']{ /* Targets all id with 'col-' */
			/*  border-bottom: 1px solid #EEE;*/
			  padding: 25px;
			}

			#invoice-top{border-bottom: 2px solid #ff3636;}
			#invoice-mid{min-height: 110px;}
			/*#invoice-bot{ min-height: 240px;}*/

			.logo{
			    display: inline-block;
			    vertical-align: middle;
				width: 110px;
			    overflow: hidden;
			}
			.info{
			    display: inline-block;
			    vertical-align: middle;
			    margin-left: 20px;
			}
			.logo img,
			.clientlogo img {
			    width: 100%;
			}
			.clientlogo{
			    display: inline-block;
			    vertical-align: middle;
				width: 50px;
			}
			.clientinfo {
			    display: inline-block;
			    vertical-align: middle;
			    margin-left: 20px
			}
			.title{
			  float: right;
			  margin-top: -10px;
			}
			.title p{text-align: right;}
			#message{margin-bottom: 30px; display: block;}
			h2 {
			    margin-bottom: 5px;
			    color: #444;
			}
			.col-right td {
			    color: #666;
			    padding: 5px 10px;
			    border: 0;
			    font-size: 0.75em;
			    border-bottom: 1px solid #eeeeee;
			}
			.col-right td label {
			    margin-left: 5px;
			    font-weight: 600;
			    color: #444;
			}
			.cta-group a {
			    display: inline-block;
			    padding: 7px;
			    border-radius: 4px;
			    background: rgb(196, 57, 10);
			    margin-right: 10px;
			    min-width: 100px;
			    text-align: center;
			    color: #fff;
			    font-size: 0.75em;
			}
			.cta-group .btn-primary {
			    background: #00a63f;
			}
			.cta-group.mobile-btn-group {
			    display: none;
			}
			table{
			  width: 100%;
			  border-collapse: collapse;
			}
			td{
			    padding: 5px;
			    border-bottom: 1px solid #cccaca;
			    font-size: 0.70em;
			    text-align: left;
			}

			.tabletitle th {
			  text-align: right;
			}
			.tabletitle th:nth-child(3) {
			    text-align: left;
			}
			th {
			    font-size: 0.7em;
			    text-align: left;
			    padding: 5px 5px;
			    border-bottom: 2px solid #ddd;
			}
			.item{width: 50%;}
			.list-item td {
			    text-align: right;
			}
			.list-item td:nth-child(3) {
			    text-align: left;
			}
			.total-row th,
			.total-row td {
			    text-align: right;
			    font-weight: 700;
			    font-size: .75em;
			    border: 0 none;
			}
			.table-main {
			    
			}
			footer {
			    border-top: 1px solid #eeeeee;;
			    padding: 15px 20px;
			}
			.effect2
			{
			  position: relative;
			}
			/*.effect2:before, .effect2:after
			{
			  z-index: -1;
			  position: absolute;
			  content: "";
			  bottom: 15px;
			  left: 10px;
			  width: 50%;
			  top: 80%;
			  max-width:300px;
			  background: #777;
			  -webkit-box-shadow: 0 15px 10px #777;
			  -moz-box-shadow: 0 15px 10px #777;
			  box-shadow: 0 15px 10px #777;
			  -webkit-transform: rotate(-3deg);
			  -moz-transform: rotate(-3deg);
			  -o-transform: rotate(-3deg);
			  -ms-transform: rotate(-3deg);
			  transform: rotate(-3deg);
			}
			.effect2:after
			{
			  -webkit-transform: rotate(3deg);
			  -moz-transform: rotate(3deg);
			  -o-transform: rotate(3deg);
			  -ms-transform: rotate(3deg);
			  transform: rotate(3deg);
			  right: 10px;
			  left: auto;
			}*/
			@media screen and (max-width: 767px) {
			    h1 {
			        font-size: .9em;
			    }
			    #invoice {
			        width: 100%;
			    }
			    #message {
			        margin-bottom: 20px;
			    }
			    [id*='invoice-'] {
			        padding: 20px 10px;
			    }
			    .logo {
			        width: 140px;
			    }
			    .title {
			        float: none;
			        display: inline-block;
			        vertical-align: middle;
			        margin-left: 40px;
			    }
			    .title p {
			        text-align: left;
			    }
			    .col-left,
			    .col-right {
			        width: 100%;
			    }
			    .table {
			        margin-top: 20px;
			    }
			    #table {
			        white-space: nowrap;
			        overflow: auto;
			    }
			    td {
			        white-space: normal;
			    }
			    .cta-group {
			        text-align: center;
			    }
			    .cta-group.mobile-btn-group {
			        display: block;
			        margin-bottom: 20px;
			    }
			     /*==================== Table ====================*/
			    .table-main {
			        border: 0 none;
			    }  
			      .table-main thead {
			        border: none;
			        clip: rect(0 0 0 0);
			        height: 1px;
			        margin: -1px;
			        overflow: hidden;
			        padding: 0;
			        position: absolute;
			        width: 1px;
			      }
			      .table-main tr {
			        border-bottom: 2px solid #eee;
			        display: block;
			        margin-bottom: 20px;
			      }
			      .table-main td {
			        font-weight: 700;
			        display: block;
			        padding-left: 40%;
			        max-width: none;
			        position: relative;
			        border: 1px solid #cccaca;
			        text-align: left;
			      }
			      .table-main td:before {
			        /*
			        * aria-label has no advantage, it won't be read inside a table
			        content: attr(aria-label);
			        */
			        content: attr(data-label);
			        position: absolute;
			        left: 10px;
			        font-weight: normal;
			        text-transform: uppercase;
			      }
			    .total-row th {
			        display: none;
			    }
			    .total-row td {
			        text-align: left;
			    }
			    footer {text-align: center;}
			}

		</style>
	</head>


	<body>
	  <div id="invoiceholder">
	  <div id="invoice" class="effect2">
	    
	    <div id="invoice-top">
	      <div class="logo">
	      	<img style="max-width: 250px;" src="http://dokan.auraqatar.com/assets/homecss/images/logo.png" alt="logo">
	      </div>
	      <div class="title">
	      	<h2>Dokan Online</h2>
	      	
	      	<p style="text-align:left;"><span id="address">Ground floor, Main building</span><br><span id="city">Address Line number 3,</span><br><span id="country">Doha, Doha</span> - <span id="zip">123456</span>
	      	
	        {{-- <h1><span class="invoiceVal invoice_num">Invoice No. 43243132</span></h1> --}}
	      </div><!--End Title-->
	    </div><!--End InvoiceTop-->


	    
	    <div id="invoice-mid">   
	      <div id="message">
	        <h2>Hello <span id="user_name">{{ $name }}</span></h2>
	        <p><span id="vandor_name">Please</span> find your invoice details below<span id="invoice_num"><b></b></span></p>
	      </div>
	
	          <div class="clearfix" style="float: left; margin-bottom: 10px;">
	            <div class="" style="text-align: right; ">
	                
	                <h3 style="text-align: left"><b>Invoice Details</b></h3>
	                
	                <p style="text-align: left;">
	                <b>Invoice Number: </b>{{ $invoice }}
	                <br><b>Invoice Date: </b>{{ $date }}
	                <br><b>Order Referance ID: </b>{{ $orderid }}
	                <br><b>Place of Supply: </b>Dokan Online
	                <br><b>Bill to: </b>{{ $name }}
	                
	                </p>
	            </div>
	        </div>    <br><br><br><br><br><br><br>
			<div id="table">
	        <table class="table-main">
	          <thead>    
	              <tr class="tabletitle">
	                <th>Sr.No</th>
	                <th>Product Name</th>
	                <th>Price</th>
	                <th>QTY</th>
	                <th>Amount</th>
	                
	              </tr>
	          </thead>
	          <?php $count = 1; ?>
	          @foreach($prods as $product)
	          <tr class="list-item">
	            <td data-label="Line" class="tableitem" id="line_num">{{ $count }}</td>
	            <td data-label="Item Code" class="tableitem" id="item_code">{{ $product['name'] }}</td>
	            <td data-label="Description" class="tableitem" id="item_description">{{ $product['price'] }}</td>
	            <td data-label="Quantity" class="tableitem" id="quantity">{{ $product['quantity'] }}</td>
	            <td data-label="Unit Price" class="tableitem" id="unit_price">{{ $product['price'] * $product['quantity'] }}</td>
	          </tr>
	          @endforeach
	          <tr class="list-item total-row">
	                <th colspan="4" class="tableitem">Shipping Charges</th>
	                <td data-label="Grand Total" class="tableitem">QAR {{ $shipping_charges }}</td>
	            </tr>
	         
	            <tr class="list-item total-row">
	                <th colspan="4" class="tableitem">Grand Total</th>
	                <td data-label="Grand Total" class="tableitem">QAR {{ $amount }}</td>
	            </tr>
	        </table>
	      </div><!--End Table-->
		<div id="legalcopy" class="clearfix" style="margin-top: 50px;">
	        <h4 style="text-align: right">This invoice is digitally generated.  No signature required</h4>
	      </div>
	    </div><!--End Invoice Mid-->
	    
	    <div class="clearfix">
	    <div id="invoice-bot">
	      
	    
	      
	    </div><!--End InvoiceBot-->
	    </div>
	    
	  </div><!--End Invoice-->
	</div><!-- End Invoice Holder-->
	  
	  

	</body>
</html>