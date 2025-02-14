<?php $this->extend('template/base'); ?>
<?php $this->section('content'); ?>

<section id="forgotPasswordPage">
    <h3 class="page-title">Esqueci minha senha</h3>
    <form action="<?php echo base_url('forgot_password'); ?>" id="formForgotPassword" name="formForgotPassword" role="form" class="form-user" method="post" accept-charset="utf-8">
        <input type="hidden" name="csrf_test_name" value="69709275be86f73d8e6c4044d8850397" />
        <input type="hidden" name="baseUrl" value="<?php echo base_url(); ?>" id="baseUrl" />
        <fieldset>
            <legend>Dados para recuperação de senha</legend>
            <div class="row">
                <div class="col-md">
                    <label for="identificador" class="form-label">Login
                        <a href="#" class="bi-info-circle-fill"
                            data-bs-trigger="click"
                            data-bs-toggle="popover"
                            data-bs-content="Utilize seu CPF como identificador UERJ (E-PREFEITURA) para redefinir sua senha">
                        </a>
                        <span class="requerido">*</span>
                    </label>
                    <input type="text" name="identificador" value="" id="identificador" label="Login" class="form-control mask-cpf" placeholder="Digite seu ID E-Prefeitura" autocomplete="off" data-required="*" />
                    <div id="divError-identificador" class="invalid-feedback"></div>
                    <div id="divNotice-identificador" class="notice-feedback"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto ms-auto mt-md-5 pt-1">
                    <button name="btnCancel" type="button" id="btnCancel" value="true" class="btn btn-danger">Cancelar</button>
                    <button name="btnValidatePasswordSend" type="button" id="btnValidatePasswordSend" value="true" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </fieldset>
        <div style="display:none"><label>Preencha este campo</label><input type="text" name="honeypot" value=""/></div>
    </form>
</section>

<?php $this->endSection(); ?>
