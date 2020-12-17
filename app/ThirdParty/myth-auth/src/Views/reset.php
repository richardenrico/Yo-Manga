<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="columns">
		<div class="column is-half is-offset-one-quarter">

            <div class="card">
                <header class="card-header">
                    <h2 class="card-header-title"><?=lang('Auth.resetYourPassword')?></h2>
                </header>
                <div class="card-content">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?=lang('Auth.enterCodeEmailPassword')?></p>

                    <form action="<?= route_to('reset-password') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="is-grouped">
                            <label for="token"><?=lang('Auth.token')?></label>
                            <input type="text" class="input <?php if(session('errors.token')) : ?>is-invalid<?php endif ?>"
                                   name="token" placeholder="<?=lang('Auth.token')?>" value="<?= old('token', $token ?? '') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.token') ?>
                            </div>
                        </div>

                        <div class="is-grouped">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="input <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="password"><?=lang('Auth.newPassword')?></label>
                            <input type="password" class="input <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                   name="password">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm"><?=lang('Auth.newPasswordRepeat')?></label>
                            <input type="password" class="input <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                   name="pass_confirm">
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="button is-dark"><?=lang('Auth.resetPassword')?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
