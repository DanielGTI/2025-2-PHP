                   
                    <!-- page content -->
                    <div class="col-lg-12 col-md-12 right_col" role="main">
                        <div class="">
                            <div class="page-title row">
                                <div class="col-sm-6 col-12 text-left">
                                    <h3>Editar Produto</h3>
                                </div>

                                <div class="col-sm-6 col-12 text-right">
                                    <div class="row">
                                        <div class="offset-xl-7 col-xl-5 col-lg-12 col-md-12 col-sm-5 col-12 form-group pull-right top_search mt-3">
                                            <a href="produto.php" class="btn btn-secondary">
                                                <i class="fa fa-arrow-left"></i> Voltar para Lista
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Informações do Produto</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Settings 1</a>
                                                        <a class="dropdown-item" href="#">Settings 2</a>
                                                    </div>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <br />
                                            <form id="editarProdutoForm" method="POST" action="processar_edicao.php" data-parsley-validate class="form-horizontal form-label-left">

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="marca">Marca <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text" id="marca" name="marca" required="required" class="form-control" value="Apple">
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="modelo">Modelo <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text" id="modelo" name="modelo" required="required" class="form-control" value="iPhone 17">
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="ram">RAM <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select class="form-control" id="ram" name="ram" required="required">
                                                            <option value="">Selecione a RAM</option>
                                                            <option value="2GB" selected>2GB</option>
                                                            <option value="4GB">4GB</option>
                                                            <option value="6GB">6GB</option>
                                                            <option value="8GB">8GB</option>
                                                            <option value="12GB">12GB</option>
                                                            <option value="16GB">16GB</option>
                                                            <option value="32GB">32GB</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="data_lancamento">Data de Lançamento <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="date" id="data_lancamento" name="data_lancamento" required="required" class="form-control" value="2025-01-15">
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="cameras">Câmeras <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text" id="cameras" name="cameras" required="required" class="form-control" value="Tripla: 48MP + 12MP + 12MP" placeholder="Ex: Tripla: 48MP + 12MP + 12MP">
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="armazenamento">Armazenamento <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <select class="form-control" id="armazenamento" name="armazenamento" required="required">
                                                            <option value="">Selecione o Armazenamento</option>
                                                            <option value="32GB">32GB</option>
                                                            <option value="64GB">64GB</option>
                                                            <option value="128GB" selected>128GB</option>
                                                            <option value="256GB">256GB</option>
                                                            <option value="512GB">512GB</option>
                                                            <option value="1TB">1TB</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="descricao">Descrição
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <textarea id="descricao" name="descricao" class="form-control" rows="3" placeholder="Descrição opcional do produto">iPhone 17 com processador A19 Pro, tela Super Retina XDR de 6.7 polegadas e bateria de longa duração.</textarea>
                                                    </div>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="item form-group">
                                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                                        <button class="btn btn-primary" type="button" onclick="window.location.href='produto.php'">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /page content -->

<!-- Custom script for form validation -->
<script>
    $(document).ready(function() {
        // Form validation
        $('#editarProdutoForm').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function() {
            return true; // Allow form submission
        });
    });
</script>