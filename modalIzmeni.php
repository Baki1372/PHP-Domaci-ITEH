        <div class="modal fade" id="izmeniPotrazivanje" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Izmena potrazivanja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="izmena_id">
                        <label class="form-label">Faktura</label>
                        <input type="text" class="form-control mb-1" id="faktura_izmena">
                        <label class="form-label">Iznos</label>
                        <input type="number" class="form-control mb-1" id="iznos_izmena">
                        <label class="form-label">Valuta</label>
                        <input type="text" class="form-control mb-1" id="valuta_izmena">
                        <label class="form-label">Kompanija</label>
                        <select class="form-select mb-1" id="kompanija_izmena">
                            <?php
                            $upit2 = "select * from kompanija";
                            $result2 = $konekcija->query($upit2);

                            while ($kompanija = mysqli_fetch_object($result2)) {
                            ?>
                                <option value="<?php echo $kompanija->id; ?>"><?php echo $kompanija->naziv; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn_sacuvaj_izmene">Sačuvaj potrazivanje</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>