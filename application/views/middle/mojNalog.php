<div class="text-center">
      <h3>
           Podaci o korisniku:
     </h3>
</div>
<!--<div class="col-md-4 col-md-offset-4">my div here</div>-->
<div class="container">
    <div class="align-items-center justify-content-center">
<form name="promeniPodatke" method="POST" action="<?php echo site_url('KorisnikKontroler/izmena');?>">
        <?php foreach($podaci as $p) { ?>   
        <div class="form-group row">
            <label for="inputUsername" class="col-sm-2 col-form-label">Username: </label>
                <div class="col-sm-10">
                    <input type="email" class="col-sm-2 form-control" name="username" disabled value="<?php echo $p->Username ?? "" ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Ime: </label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" name="ime" value="<?php echo $p->Name ?? "" ?>" >
                </div>
        </div>
        <div class="form-group row">
            <label for="inputSurname" class="col-sm-2 col-form-label">Prezime: </label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" name="prezime" value="<?php echo $p->Surname ?? ""; ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="inputDate" class="col-sm-2 col-form-label">Godina rodjenja: </label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" name="godina" disabled value="<?php echo $p->DateOfBirth ?? ""; ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="inputBroj" class="col-sm-2 col-form-label">Broj telefona: </label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" name="broj" value="<?php echo $p->Mobile ?? ""; ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">E-mail:</label>
                <div class="col-sm-10">
                    <input type="email" class="col-sm-2 form-control" name="mejl" value="<?php echo $p->Email ?? ""; ?>">
                </div>
        </div>
        <label>Promenite lozinku</label>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Trenutna lozinka: </label>
                <div class="col-sm-10">
                    <input type="password" class="col-sm-2 form-control" name="password" value="<?php echo $p->Password ?? ""; ?>" >
                </div>
        </div>
        <div class="form-group row">
            <label for="inputNova" class="col-sm-2 col-form-label">Nova lozinka: </label>
                <div class="col-sm-10">
                    <input type="password" class="col-sm-2 form-control" name="novip">
                </div>
        </div>
        <div class="form-group row">
            <label for="inputPotvrda" class="col-sm-2 col-form-label">Potvrdite lozinku: </label>
                <div class="col-sm-10">
                    <input type="password" class="col-sm-2 form-control" name="potvrda" >
                </div>
        </div>
        <div class="form-row">
            <label for="#" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="submit" name="izmeni" class="btn btn-outline-warning" value="Izmeni podatke">
            </div>
        </div>
        <?php } 
        ?>
    </form>
    </div>
</div>