<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="columns">
		<div class="column is-half is-offset-one-quarter">

			<div class="card">
				<header class="card-header">
					<h2 class="card-header-title"><?=lang('Auth.loginTitle')?></h2>
				</header>
				<div class="card-content">

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
						<div class="is-grouped">
							<label for="login"><?=lang('Auth.email')?></label>
							<input type="email" class="input <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php elseif ($config->validFields === ['username']): ?>
						<div class="is-grouped">
							<label for="login"><?=lang('Auth.username')?></label>
							<input type="text" class="input <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.username')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="is-grouped">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="input <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

						<div class="is-grouped">
							<label for="password"><?=lang('Auth.password')?></label>
							<input type="password" name="password" class="input  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

<?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="checkbox">
								<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
<?php endif; ?>

						<br>

						<button type="submit" class="button is-dark"><?=lang('Auth.loginAction')?></button>
					</form>

					<hr>

<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
					<p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>
