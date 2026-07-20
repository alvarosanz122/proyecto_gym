<?php   include '../nav/header1.php' ; ?>
<body class="bg-light">
    

<div class="container bg-red">
<div class="row">
<div class="col-xl-6 col-12 d-flex justify-content-center"><div class="card" style="width: 18rem;">
<img src="img/recibo.jpg" width="286px" height="286px" alt="...">
  <div class="card-body">
    <a href="#" class="btn btn-primary w-100 " data-bs-toggle="modal" data-bs-target="#exampleModal">Crear factura</a>
  </div>
</div>
</div> 
<div class="col-xl-6 col-12 mt-3 d-flex justify-content-center"><div class="card" style="width: 18rem;">
  <img src="img/reporte.jpg" width="286px" height="286px" alt="...">
  <div class="card-body">
    <a href="#" class="btn btn-primary w-100">Reportes</a>
  </div>
</div></div>

</div>
<div class="row">

<div class="col-xl-6 col-12 mt-3 d-flex justify-content-center"><div class="card" style="width: 18rem;">
  <img src="img/icono-recibo.jpg" width="286px" height="286px" alt="...">
  <div class="card-body">
    <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal"
                data-bs-target="#modalId">Crear recibo</a>
  </div>
</div></div>
<div class="col-xl-6 col-12 mt-3 d-flex justify-content-center"><div class="card" style="width: 18rem;">
  <img src="img/guardar-recibo.jpg" class="img-fluid" alt="...">
  <div class="card-body">
    <a href="#" class="btn btn-primary w-100">Guardar recibo </a>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!--  recibo -->
<div
                class="modal fade"
                id="modalId"
                tabindex="-1"
                data-bs-backdrop="static"
                data-bs-keyboard="false"
                
                role="dialog"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div
                    class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                    role="document"
                >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                <i class="bi bi-file-ruled fs-1"></i>Facturación
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">

                                <div class="card">
                                    
                                    <div class="card-body">
                                        <h4 class="card-title text-end text-warning text-uppercase">Recibo Nª <span id="demo"></span></h4>
                                        <p class="card-text"><div class="mb-3">
                                            <input
                                                type="date"
                                                class="form-control form-control-sm float-end"
                                                name=""
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                                style="width:200px;"
                                            />
                                            
                                            

                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-primary mt-3">
                                                <div class="card-body">
                                                    <h5 class="card-title fs-3">recibo de: <span id="demo1"></span></h5>
                                                    <p class="card-text fs-3">La cantidad de: <span id="demo2"></span></p>
                                                    <p class="card-text fs-3">por: <span id="demo3"></span></p>
                                                    <p class="card-text fs-3">euros €:<span class="p-3" id="demo4"></span></p>
                                                </div>
                                            </div>

                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Cerrar
                            </button>
                            <button type="button" class="btn btn-primary" onclick="window.print()">Imprimir</button>
                            <button type="button" class="btn btn-danger" onclick="facturacion()">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Optional: Place to the bottom of scripts -->
            <script>
                const myModal = new bootstrap.Modal(
                    document.getElementById("modalId"),
                    options,
                );
            </script>
</div>
</div>
</body>