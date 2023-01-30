<?php 
include_once '../common/header.php';
include_once '../common/sidebar.php';
?>

    <section class="content">
        <div class="container-fluid">
            <!--<div class="block-header">
                <h2>
                    회원 리스트
                    <small>Taken from <a href="https://github.com/mindmup/editable-table" taget="_blank">github.com/mindmup/editable-table</a></small>
                </h2>
            </div>-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                회원 리스트
                                <small></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>이메일</th>
                                        <th>닉네임</th>
                                        <th>휴대폰번호</th>
                                        <th>주소</th>
                                        <th>본인인증여부</th>
                                        <th>코인보유량</th>
                                        <th>락업상태</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--<tr>
                                        <td>Car</td>
                                        <td>100</td>
                                        <td>200</td>
                                        <td>0</td>
                                    </tr>-->
                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
include_once '../common/footer.php';
?>