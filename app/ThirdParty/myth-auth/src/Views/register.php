<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="columns">
		<div class="column is-half is-offset-one-quarter">

			<div class="card">
				<header class="card-header">
                    <h2 class="card-header-title"><?=lang('Auth.register')?></h2>
                </header>
                <div class="card-content">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="is-grouped">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="input <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>

                        <div class="is-grouped">
                            <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="input <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                        <div class="is-grouped">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="input <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="is-grouped">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="input <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                        </div>

                        <br>

                        <button type="submit" class="button is-dark"><?=lang('Auth.register')?></button>
                    </form>


                    <hr>

                    <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
