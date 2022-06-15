<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/A4_portrait_screen.css" media="screen">
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
		size: 21cm 29.7cm;	
	}

	.page:after {
		content: counter(page, decimal);
	}
</style>	
