<?php session_start(); ?>

<div class="container">
	<!-- Banner -->
	<div class="banner col-xs-4 col-xs-offset-4">
		<img src="png/ms_airline.png" class="img-responsive"/>
	</div>

	<!-- Get User Info -->
	<?php
	if($_SESSION['ch_name'] == null) { // if user info is unset
		require_once('/backend/taskmodel.php');
		$user = getUserInfo($_SESSION['ID']);
		if (!empty($user)) 
		{
			$_SESSION['ch_name'] = $user[0][1];
			$_SESSION['en_name'] = $user[0][2];
			$_SESSION['country'] = $user[0][3];
			$_SESSION['room'] = $user[0][4];
			$_SESSION['master'] = $user[0][5];
			$_SESSION['mission'] = $user[0][6];

			/* Decide teams for Taipei & Stronghold */
			switch($_SESSION['country'])
			{
				case 'America':
				$_SESSION['t_team'] = 1;
				$_SESSION['s_team'] = 'A';
				break;
				case 'Canada':
				$_SESSION['t_team'] = 2;
				$_SESSION['s_team'] = 'A';
				break;
				case 'Brazil':
				$_SESSION['t_team'] = 3;
				$_SESSION['s_team'] = 'A';
				break;
				case 'Italy':
				$_SESSION['t_team'] = 4;
				$_SESSION['s_team'] = 'B';
				break;
				case 'Germany':
				$_SESSION['t_team'] = 5;
				$_SESSION['s_team'] = 'B';
				break;
				case 'England':
				$_SESSION['t_team'] = 6;
				$_SESSION['s_team'] = 'B';
				break;
				case 'Taiwan':
				$_SESSION['t_team'] = 7;
				$_SESSION['s_team'] = 'C';
				break;
				case 'Japan':
				$_SESSION['t_team'] = 8;
				$_SESSION['s_team'] = 'C';
				break;
				case 'Thailand':
				$_SESSION['t_team'] = 9;
				$_SESSION['s_team'] = 'C';
				break;
				case 'SouthAfrica':
				$_SESSION['t_team'] = 10;
				$_SESSION['s_team'] = 'D';
				break;
				case 'Madagascar':
				$_SESSION['t_team'] = 11;
				$_SESSION['s_team'] = 'D';
				break;
				case 'Egypt':
				$_SESSION['t_team'] = 12;
				$_SESSION['s_team'] = 'D';
				break;
			}	
		}
		else
		{
			session_unset();
			header('Location: /index.php');
		}
	}
	?>


	<!-- Plane Ticket-->
	<div class="plane-ticket">
		<?php echo '<img src="/png/plane_ticket/'.$_SESSION['country'].'.png" class="img-responsive">'; ?>
		<!-- Larger Information -->
		<div class="large-info" id="ID-lg"><?php echo $_SESSION['ID'] ?></div>
		<div class="large-info" id="en-name-lg"><?php echo $_SESSION['en_name'] ?></div>
		<div class="large-info" id="country-lg"><?php echo $_SESSION['country'] ?></div>
		<div class="large-info" id="room-lg"><?php echo $_SESSION['room'] ?></div>
		<!-- Smaller Information -->
		<div class="small-info" id="ID-sm"><?php echo $_SESSION['ID'] ?></div>
		<div class="small-info" id="en-name-sm">
			<?php 
			$name = explode(" ", $_SESSION['en_name']);
			echo $name[0];  // remove last name
			?>	
		</div>
		<div class="small-info" id="country-sm"><?php echo $_SESSION['country'] ?></div>
		<div class="small-info" id="room-sm"><?php echo $_SESSION['room'] ?></div>
	</div>


	<!-- Mission -->
	<div class="mission">
		<div class="row col-lg-offset-1 col-xs-offset-0">
			<div class="col-lg-1 col-xs-2">
				<img src="/png/target.svg" class="img-responsive" id="target">
			</div>
			<div class="col-lg-9 col-xs-8 mission-margin">
				<div id="mission-title">機密任務</div>	
				<div class="mission-row">
					小主人：<div id="mission-master"><?php echo $_SESSION['master'] ?></div>
				</div>
				<div class="mission-row">
					任務內容：<div id="mission-content"><?php echo $_SESSION['mission'] ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Change Password -->
	<div class="text-center">
		<button type="button" class="btn btn-md btn-warning" id="btn-modal" data-toggle="modal" data-target="#change-pwd">更改登入密碼</button>
	</div>
	<!-- Modal -->
	<div id="change-pwd" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">更改登入密碼</h4>
				</div>
				<div class="modal-body container-fluid">
					<form>
						<div class="form-group">
							<label for="pwd1">新密碼：</label>
							<input type="password" class="form-control" 
							id="pwd1" placeholder="Enter New Password"/>
						</div>
						<div class="form-group">
							<label for="pwd2" >請再輸入一次：</label>
							<input type="password" class="form-control"
							id="pwd2" placeholder="Enter Again"/>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-danger" id="btn-change-pwd" data-dismiss="modal">確定更改？</button>
						</div>
					</form>
				</div>
				<!--<div class="modal-footer">
					<button type="button" class="btn btn-default" id="btn-change-pwd" data-dismiss="modal">Close</button>
				</div>-->
			</div>
		</div>
	</div>
</div>

	

