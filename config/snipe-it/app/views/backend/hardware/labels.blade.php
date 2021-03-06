<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flat Labels</title>
    <link href="labels.css" rel="stylesheet" type="text/css" >
    <style>
    body {
        width: 8.5in;
	margin-top: 0in !important;
	padding-bottom: 0px !important;
	margin-bottom: 0px !important;
        }
    .label{
        width: 2.5in;
        height: .92in;
	padding: .1in;

        float: left;

        overflow: hidden;

        outline: none;
        }
    	.page-break  {
        	clear: left;
        	display:block;
       	 	page-break-after:always;
       	 }
	.qr_img {
		float: right;
		height: .7in;
		width: .7in;
		padding-top: .08in;
	    }

	 .qr_text {
		float: left;
		font-family: arial, helvetica, sans-serif;
		font-size: 7pt;
		padding-right: .1in;
		padding-top: .08in;
		padding-left: .08in;
	    }

@page {
	width: 2.5in;
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 0px;
	margin-bottom: 0px;
}


@media print {	
	.label {
		width: 3.5in;
		padding: .1in;
	}
	
	.qr_img {
		width: 1in;
		height: 1in;
		padding-top: .08in;
		padding-right: .08in;
	}

	.qr_text {
		font-size: 9pt;
		
	}
}



    </style>

</head>
<body>


@foreach ($assets as $asset)
	<?php $count++; ?>
	<div class="label">
		<div class="qr_img"><img src="./{{{ $asset->id }}}/qr_code"; width=100%; height=100%;></div>
		<div class="qr_text">
			<b>Property of <br>Canada-France-Hawaii Telescope</b>
			<br>
			<b>Phone: (808) 885-7944</b>
			<br>
			<b>Email: software@cfht.hawaii.edu</b>
			<br>
			
			<!--@if ($settings->qr_text!='')
				{{{ $settings->qr_text }}}
				
			@endif -->
            		<!--@if ($asset->name!='')
                		<b>N: {{ $asset->name }}</b>
                		<br>
            		@endif-->
			@if ($asset->asset_tag!='')
				{{{ $asset->asset_tag }}}
				<br>
			@endif
			@if ($asset->serial!='')
				S/N: {{{ $asset->serial }}}
				<br>
			@endif

		</div>
	</div>
	 @if ($count % 1 == 0)
		<div class="page-break"></div>

	@endif

@endforeach



</body>
</html
