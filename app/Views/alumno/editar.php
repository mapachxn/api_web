<<<<<<< HEAD
<div class="container">
    <div class="row">
    <?php print_r($alumno); ?>
    <?php echo $alumno->nombre ?>
        <div class="col-8">
            <h2>Editar Alumno</h2>
            <form action="<?= base_url('alumno/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="id" value="<?= $alumno->id ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" 
                    name="nombre" id="nombre" value="<?= $alumno->nombre ?>">
                </div>
                
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento </label>
                    <input type="date" class="form-control" name="fechaNacimiento" 
                    id="fechaNacimiento" value="<?= $alumno->fechaNacimiento ?>">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <?php if($alumno->sexo == "HOMBRE"): ?>
                        <option value="Hombre" selected>Hombre</option>
                        <option value="Mujer" >Mujer</option>
                        <?php else: ?>
                        <option value="Hombre" >Hombre</option>
                        <option value="Mujer" selected>Mujer</option>
                        <?php endif ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
=======
<div class="container">
    <div class="row">
    <?php print_r($alumno); ?>
    <?php echo $alumno->nombre ?>
        <div class="col-8">
            <h2>Editar Alumno</h2>
            <form action="<?= base_url('alumno/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="id" value="<?= $alumno->id ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" 
                    name="nombre" id="nombre" value="<?= $alumno->nombre ?>">
                </div>
                
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento </label>
                    <input type="date" class="form-control" name="fechaNacimiento" 
                    id="fechaNacimiento" value="<?= $alumno->fechaNacimiento ?>">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <?php if($alumno->sexo == "HOMBRE"): ?>
                        <option value="Hombre" selected>Hombre</option>
                        <option value="Mujer" >Mujer</option>
                        <?php else: ?>
                        <option value="Hombre" >Hombre</option>
                        <option value="Mujer" selected>Mujer</option>
                        <?php endif ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
>>>>>>> 91cfe90 (MySQL Reloaded)
</div>