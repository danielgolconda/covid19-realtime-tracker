<style type="text/css">
	
	html {
		scroll-behavior: smooth;
	}

	*{margin: 0;padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}
	.nav_style{
		background-color: #9933ff;
	}

	.row {
		margin-left:0!important;
		margin-right:0!important;
	}
	.nav_style a {
		color:white;
	}

	/*/////////////main head \\\\\\\\\\\\\\\\*/

	/*.mainheader {
		height: 400px;
		width: 100%;
	}*/

	.rightside h1{
		font-size: 3rem;
	}

	.rot img{
		animation: gocorona 3s linear infinite;
	}

	@keyframes gocorona {
		0% { transform: rotate(0); }
		100% { transform: rotate(360deg); }
	}

	.leftside img{animation: heartbeat 5s linear infinite;}

	@keyframes heartbeat 
	{
		0%
		{
			transform: scale(.75);
		}
		20%
		{
			transform: scale(1);
		}
		40%
		{
			transform: scale(.75);
		}
		60%
		{
			transform: scale(1);
		}
		80%
		{
			transform: scale(.75);
		}
		100%
		{
			transform: scale(.75);
		}
	}

	.form-group.required .control-label:after {
  content:"*";
  color:red;
	}

	.corona_update h3 {
			color:#ff3333;
	}

	.corona_update h1 {
		font-size: 2rem;
		text-align: center;
	}



	/* ///////about id */

	.sub_section {
		background-color: #fbfafd;
	}




		/* *************footer **********/

		.footer_style
		{
			background-color: #9933ff;
		}


		 .footer_style p
		 {
		 	margin-bottom: 0!important;
		 }


		 #myBTN {

		 		color: #9933ff;
		 	}
		 #myBTN:hover{
		 	color:black;
		 }


		@media(max-width:768px){

			.mainheader {
				height:700px;
				text-align:center;
			}

			.mainheader h1{
				text-align:center;
				padding:0;
				width:100%;
				font-size:34px;
			}

			.count_style {
				display:inline!important;
			}

			.count_style p{
				text-align:center;
			}
		}

</style>