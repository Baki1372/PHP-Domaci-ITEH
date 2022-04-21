         <div class="modal fade" id="DodajPotrazivanje" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Potraživanje</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form method="POST">
                             <label class="form-label">Faktura</label>
                             <input type="text" class="form-control mb-2" name="faktura">
                             <label class="form-label">Iznos</label>
                             <input type="number" class="form-control mb-2" name="iznos">
                             <label class="form-label">Valuta</label>
                             <input type="text" class="form-control mb-2" name="valuta">
                             <label class="form-label">Kompanija</label>
                             <select class="form-select mb-3" name="sel_kompanija">
                                 <?php

                                    $upit1 = "select * from kompanija";
                                    $result1 = $konekcija->query($upit1);

                                    while ($kompanija = mysqli_fetch_object($result1)) {
                                    ?>
                                     <option value="<?php echo $kompanija->id; ?>"><?php echo $kompanija->naziv; ?></option>
                                 <?php
                                    }
                                    ?>
                             </select>
                             <button type="submit" class="btn btn-primary" name="btn_dodaj">Dodaj</button>
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                             <script>
                                 if (window.history.replaceState) {
                                     window.history.replaceState(null, null, window.location.href);
                                 }
                             </script>
                         </form>
                     </div>

                 </div>
             </div>
         </div>