<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="columns">
		<div class="column is-half is-offset-one-quarter">

            <div class="card">
                <header class="card-header">
                    <h2 class="card-header-title"><?=lang('Auth.forgotPassword')?></h2>
                </header>
                <div class="card-content">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?=lang('Auth.enterEmailForInstructions')?></p>

                    <form action="<?= route_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="is-grouped">
                            <label for="email"><?=lang('Auth.emailAddress')?></label>
                            <input type="email" class="input <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="button is-dark"><?=lang('Auth.sendInstructions')?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
