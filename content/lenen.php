<!-- form registratie -->

<div class="container-fluid margin-fix">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="card-subtitle mb-2 text-muted">Boeken lenen</h4>
                </div>

                <form action="./index.php?content=lenenscript" method="POST">
                    <div class="form-container">
                        <div class="form-row">

                            <div class="form-group col-12">
                                <label for="inputusername">barcode</label>
                                <input type="text" name="barcode" class="form-control" id="barcode" placeholder="barcode" autofocus>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                        <button type="submit" class="btn btn-lg btn-block registratie-button">Klaar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-4"></div>
