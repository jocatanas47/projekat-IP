<div class="row content">
    <div class="col-12">
        <br>
        <div class="row justify-content-center">
            <br>
            <div class="col-8 col-md-4 text-center">
                <input type="radio" class="btn btn-check" name="profil" id="podaci" checked onclick="togglePodRadAk(0)">
                <label class="btn j-orange" for="podaci">podaci</label>

                <input type="radio" class="btn btn-check" name="profil" id="radionice" onclick="togglePodRadAk(1)">
                <label class="btn j-orange" for="radionice">radionice</label>

                <input type="radio" class="btn btn-check" name="profil" id="akcije" onclick="togglePodRadAk(2)">
                <label class="btn j-orange" for="akcije">akcije</label>
            </div>
        </div>
        <br>
        <div class="row" id="podaci_div">
            <div class="col-12">
                <div class="row justify-content-center j-greska">
                    <?= $greska ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-md-5">
                        <div class="row">
                            <div class="col-12 text-center">
                                <?php if ($profilna): ?>
                                    <div>
                                        <img class="img-fluid" src=<?= $profilna ?>>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 text-center">
                                <form name="form2" action="routes.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="kontroler" name="kontroler" value="korisnik">
                                    <input type="hidden" id="akcija" name="akcija" value="promeni_profilnu">
                                    <div class="row">
                                        <div class="col-10 col-md-6">
                                            <input type="file" class="form-control" accept=".jpg,.png" name="slika" required>
                                        </div>
                                        <div class="col-10 col-md-6">
                                            <input type="submit" class="btn j-btn j-orange" value="promeni profilnu">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>

                    </div>
                    <div class="col-10 col-md-5 align-bottom">
                        <form name="form1" action="routes.php" method="post">
                            <input type="hidden" name="akcija" id="akcija" value="azuriraj_podatke">
                            <input type="hidden" name="kontroler" id="kontroler" value="korisnik">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-hover">
                                        <tr>
                                            <td>ime:</td>
                                            <td><input type="text" name="ime" value="<?= $korisnik["ime"] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>prezime:</td>
                                            <td><input type="text" name="prezime" value="<?= $korisnik["prezime"] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>korisničko ime:</td>
                                            <td><input type="text" name="kor_ime" value="<?= $korisnik["kor_ime"] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>kontakt telefon:</td>
                                            <td><input type="text" name="telefon" value="<?= $korisnik["telefon"] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>e-mail adresa:</td>
                                            <td><input type="text" name="mejl" value="<?= $korisnik["mejl"] ?>" required></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input type="submit" class="btn j-orange" value="ažuriraj podatke">
                                </div>
                            </div>
                        </form>
                        <form method="post" action="routes.php">
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" name="akcija" id="akcija" value="promeni_lozinku">
                                    <input type="hidden" name="kontroler" id="kontroler" value="korisnik">

                                    <table class="table table-hover">
                                        <tr>
                                            <td>stara lozinka:</td>
                                            <td><input type="password" name="stara_lozinka" required></td>
                                        </tr>
                                        <tr>
                                            <td>nova lozinka:</td>
                                            <td><input type="password" name="nova_lozinka" required></td>
                                        </tr>
                                        <tr>
                                            <td>potvrda:</td>
                                            <td><input type="password" name="potvrda" required></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input type="submit" class="btn j-orange" value="promeni lozinku">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" id="radionice_div" style="display:none">
            <div class="col-12">
                <table class="table table-hover text-center" id="radionice_tabela">
                    <tr>
                        <th onclick="sortirajRadionice(0)">
                            naziv
                        </th>
                        <th onclick="sortirajRadionice(1)">
                            datum
                        </th>
                        <th onclick="sortirajRadionice(2)">
                            mesto
                        </th>
                        <th onclick="sortirajRadionice(3)">
                            kratki opis
                        </th>
                        <th onclick="sortirajRadionice(4)">
                            dugi opis
                        </th>
                        <th onclick="sortirajRadionice(5)">
                            maksimalni broj posetilaca
                        </th>
                    </tr>
                    <?php foreach ($radionice as $radionica): ?>
                        <tr>
                            <td>
                                <?= $radionica["naziv"] ?>
                            </td>
                            <td>
                                <?= $radionica["datum"] ?>
                            </td>
                            <td>
                                <?= $radionica["mesto"] ?>
                            </td>
                            <td>
                                <?= $radionica["opis_kratki"] ?>
                            </td>
                            <td>
                                <?= $radionica["opis_dugi"] ?>
                            </td>
                            <td>
                                <?= $radionica["max_broj_posetilaca"] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <div class="row justify-content-center" id="akcije_div" style="display:none">
            <div class="col-12 justify-content-center">
                <h4> komentari </h4>
                <table class="table table-hover">
                    <tr>
                        <th>
                            radionica
                        </th>
                        <th>
                            komentar
                        </th>
                        <th>
                            izmeni
                        </th>
                        <th>
                            izbriši
                        </th>
                    </tr>
                    <?php foreach ($komentari as $komentar): ?>
                        <?php $radionica = RadioniceDB::get_radionicu_po_idR($komentar["idR"]); ?>
                        <tr>
                            <td>
                                <?= $radionica["naziv"] . " - " . $radionica["datum"] ?>
                            </td>
                        <form method="post" action="routes.php">
                            <input type="hidden" name="kontroler" id="kontroler" value="korisnik">
                            <input type="hidden" name="akcija" id="akcija" value="promeni_komentar">
                            <input type="hidden" name="idKom" id="idKom" value="<?= $komentar["idKom"] ?>">
                            <td>
                                <input type="text" name="komentar" id="komentar" value="<?= $komentar["komentar"] ?>">
                            </td>
                            <td>
                                <input type="submit" class="btn j-orange" value="promeni komentar">
                            </td>
                        </form>
                        <form method="post" action="routes.php">    
                            <input type="hidden" name="kontroler" id="kontroler" value="korisnik">
                            <input type="hidden" name="akcija" id="akcija" value="izbrisi_komentar">
                            <input type="hidden" name="idKom" id="idKom" value="<?= $komentar["idKom"] ?>">
                            <td>
                                <input type="submit" class="btn j-orange" value="izbriši komentar">
                            </td>
                        </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-10 col-md-6">
                <h4> sviđanja </h4>
                <table class="table table-hover">
                    <tr>
                        <th>
                            radionica
                        </th>
                        <th>
                            akcija
                        </th>
                    </tr>
                    <?php foreach ($svidjanja as $svidjanje): ?>
                        <?php $radionica = RadioniceDB::get_radionicu_po_idR($svidjanje["idR"]); ?>
                        <tr>
                            <td>
                                <?= $radionica["naziv"] . " - " . $radionica["datum"] ?>
                            </td>
                            <td>
                                <form method="post" action="routes.php">
                                    <input type="hidden" name="kontroler" id="kontroler" value="korisnik">
                                    <input type="hidden" name="akcija" id="akcija" value="povuci_svidjanje">
                                    <input type="hidden" name="idS" id="idS" value="<?= $svidjanje["idSvidj"] ?>">
                                    <input type="submit" class="btn j-orange" value="povuci sviđanje">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
