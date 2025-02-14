<?php $this->extend('template/base'); ?>
<?php $this->section('content'); ?>

<section id="sobre">
    <h3 class="page-title">Sobre o Sistema</h3>
    <fieldset>
        <legend>Dados do SIG - PREFEI</legend>
        <div class="row">
            <div class="col-12">
                <table id="sobreTable" class="cell-border" style="width:100%">
                    <tbody>
                        <tr>
                            <td class="rotulo">Nome</td>
                            <td class="conteudo">SIG - PREFEI - Sistema Integrado de Gestão da Prefeitura dos Campi </td>
                        </tr>
                        <tr>
                            <td class="rotulo">Descrição</td>
                            <td class="conteudo">Disponibiliza o acesso aos sistemas da Prefeitura dos Campi de forma unificada através de um login único.
                                Permite o gerenciamento e controle das permissões de acesso aos sistemas da Prefeitura dos Campi. </td>
                        </tr>
                        <tr>
							<td class="rotulo">Desenvolvedor </td>
							<td class="conteudo">Diogo Nascimento - <a href="https://www.prefeitura.uerj.br/" onclick="window.open('https://www.prefeitura.uerj.br/', '_blank'); return false;">Prefeitura dos Campi</a>/<a href="https://www.prefeitura.uerj.br/prefeitura/daeng/" onclick="window.open('https://www.prefeitura.uerj.br/prefeitura/daeng/', '_blank'); return false;">DAENG</a>
							</td>
						</tr>
                        <tr>
							<td class="rotulo">Site</td>
							<td class="conteudo"><a href="https://github.com/diogosvicente" onclick="window.open('https://github.com/diogosvicente', '_blank'); return false;">https://github.com/diogosvicente</a>
							</td>
						</tr>
                        <tr>
							<td class="rotulo">Template</td>
							<td class="conteudo"><a href="https://www.dinfo.uerj.br" onclick="window.open('https://www.dgti.uerj.br', '_blank'); return false;">DGTI</a> - Diretoria Geral de Tecnologia da Informação
							</td>
						</tr>
                        <tr>
                            <td class="rotulo">Versão corrente</td>
                            <td class="conteudo">v1 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Informações de change log</legend>
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </fieldset>
</section>

<?php $this->endSection(); ?>