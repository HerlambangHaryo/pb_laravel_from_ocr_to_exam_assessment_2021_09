<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/A4_landscape_screen.css" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/table.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/display.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/font.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/color.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/margin.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/padding.css">
<style type="text/css">
    * { font-family: DejaVu Sans, sans-serif; }
	html { margin: 5mm}
	@page {
		size: 29.7cm 21cm;	
	}

	.page:after {
		content: counter(page, decimal);
	}
</style>	
