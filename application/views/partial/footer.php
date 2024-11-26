		</div>
	</div>


	<style>
		#footer {
			background-color: #f5f5f5;
			text-align: center;
			position: fixed;
			bottom: 0;
			width: 100vw;
		}
		#content .wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 5px;
		 }
		.company-site{
			text-decoration: none;
			color: #000;
			font-size : 14px;
		}
		#content .wrapper p{
			font-size : 16px;
		}
		#content .wrapper a{
			font-size : 16px;
			display: inline-block;
			margin: -15px 0 0 0 ;
		}

		@media screen and (max-width: 600px) {
			#content .wrapper{
			display: block;
		}
		#footer {
			margin-top: 50px;
			background-color: #f5f5f5;
			text-align: center;
			position: relative;
			bottom: 0;
			width: 100vw;
		}

		}
	</style>

	<div id="footer">
		<div id="content" class="jumbotron push-spaces">
			<div class="wrapper">
			<p><?php echo $this->lang->line('common_copyrights', date('Y')); ?> ·
			<p>All Rights reserved. &nbsp;</p>
			<a class="company-site" href="https://devsort.net/" target="_blank"><?php echo "Devsort Services" ?></a> 
			</div>
		</div>
	</div>
</body>
</html>
