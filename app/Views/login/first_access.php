<?php $this->extend('template/base'); ?>
<?php $this->section('content'); ?>

<section id="firstAccessPage">
    <h3 class="page-title">Primeiro Acesso</h3>
    <form action="<?php echo base_url('first_access'); ?>" id="formFirstAccess" name="formFirstAccess" role="form" class="form-user" method="post" accept-charset="utf-8">
        <input type="hidden" name="csrf_test_name" value="69709275be86f73d8e6c4044d8850397" />
        <input type="hidden" name="baseUrl" value="<?php echo base_url(); ?>" id="baseUrl" />
        <fieldset id="passo1">
            <div class="alert alert-warning">
                Preencha os dados a seguir para efetuar seu cadastro no sistema.
                Os campos assinalados com * são de preenchimento obrigatório!
            </div>
            <legend>Dados para primeiro acesso</legend>
            <div class="row">
                <div class="col-sm">
                    <label for="identificador" class="form-label">E-Prefeitura <span class="requerido">*</span></label>
                    <input type="text" name="identificador" value="" id="identificador" label="E-Prefeitura" class="form-control mask-cpf" placeholder="Utilize seu CPF como identificador UERJ (E-Prefeitura)" autocomplete="off" data-required="*" maxlength="14" />
                    <div id="divError-identificador" class="invalid-feedback"></div>
                    <div id="divNotice-identificador" class="notice-feedback"></div>
                </div>
                <div class="col-sm">
                    <label for="email" class="form-label">E-mail <span class="requerido">*</span></label>
                    <input type="text" name="email" value="" id="email" label="E-mail" class="form-control" placeholder="Digite seu e-mail (Não é permitido uso de e-mails UERJ)" autocomplete="off" data-required="*" />
                    <div id="divError-email" class="invalid-feedback"></div>
                    <div id="divNotice-email" class="notice-feedback"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Informe seu CPF e seu e-mail externo (Não pode ser utilizado email uerj).</p>
                </div>
            </div>
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-end">
                <button name="btnCancel" type="button" id="btnCancel" value="true" class="btn btn-danger">Cancelar</button>
                <button name="btnSend" type="button" id="btnContinue1" value="true" class="btn btn-primary">Continuar</button>
            </div>
        </div>
        </fieldset>
        <div style="display:none"><label>Preencha este campo</label><input type="text" name="honeypot" value=""/></div>
    </form>
</section>
        
<?php $this->endSection(); ?>
