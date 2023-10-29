<aside id="sidebar" class="sidebar">

		  <ul class="sidebar-nav" id="sidebar-nav">

		    <li class="nav-item">
		      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
		        <i class="bi bi-grid"></i>
		        <span>Home</span>
		      </a>
		    </li>

		    <li class="nav-item">
		      <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>keranjang">
		        <i class="bi bi-cart-check"></i>
		        <span>Cart</span>
		      </a>
		    </li>
			<li class="nav-item">
		      <a class="nav-link <?php echo (uri_string() == 'riwayat') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>riwayat">
		        <i class="bi bi-clock-history"></i>
		        <span>Recent Transaction</span>
		      </a>
		    </li>
		    <?php
		    if (session()->get('role') == 'admin') {
		    ?>
		      	<li class="nav-item">
					<a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>produk">
					<i class="bi bi-receipt"></i>
					<span>Product</span>
					</a>
		      	</li>
			  	<li class="nav-item">
		        <a class="nav-link <?php echo (uri_string() == 'user') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>user">
		          <i class="bi bi-receipt"></i>
		          <span>User Data</span>
		        </a>
		      </li>
				<li class="nav-item">
					<a class="nav-link <?php echo (uri_string() == 'transaksi') ? "" : "collapsed" ?>" href="<?php echo base_url() ?>transaksi">
						<i class="bi bi-graph-up"></i>
						<span>Transaction</span>
					</a>
				</li>
		    <?php
		    }
		    ?>
		  </ul>

		</aside><!-- End Sidebar-->
		