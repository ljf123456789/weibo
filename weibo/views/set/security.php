<div class="content clearfix">
	<?php $this->load->view('components/set_left_nav');?>
	<div class="main">
		<div class="box_center">
			<div class="title clearfix">帐号安全</div>
			<div class="personinfo">
				<div class="item active">
					<ul class="clearfix">
						<li>修改密码</li>
						<li class="S_txt2">&nbsp;</li>
						<li><a href="javascript:void(0)">设置</a></li>
					</ul>
					<div class="acc_form hide">
						<form action="" class="form_passwd">
							<div class="info_item clearfix">
								<div class="tit">当前密码</div>
								<div class="inp"><input class="W_input" type="password" name="passwd"></div>
								<div class="tips"><i></i></div>
							</div>
							<div class="info_item clearfix">
								<div class="tit">新密码</div>
								<div class="inp"><input class="W_input" type="password" name="newPasswd" id="newPasswd"></div>
								<div class="tips"><i></i><label class="S_txt2">请输入密码</label></div>
							</div>
							<div class="info_item clearfix">
								<div class="tit">确认密码</div>
								<div class="inp"><input class="W_input" type="password" name="rePasswd"></div>
								<div class="tips"><i></i></div>
							</div>
							<div class="info_item clearfix">
								<div class="inp btn"><a href="javascript:void(0)" class="W_btn_a save_info"><span>保存</span></a><a href="javascript:void(0)" class="W_btn_b" action="close_item"><span>关闭</span></a></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
