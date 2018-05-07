<div class="row">
    <div class="col-lg-3 col-md-1 col-sm-0"></div>
    <div class="card col-lg-6 col-md-10 col-sm-12">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลเรือประมง</h5>

            <?php echo validation_errors(); ?>

            <?php echo form_open('fishingvessel/create') ?>
                <div class="form-group">
                    <label for="vesselName">ชื่อ</label>
                    <input id="vesselName" name="vesselName" class="form-control" type="text" >
                </div>
                <div class="form-group">
                    <label for="country">ประเทศ:</label>
                    <select id="country" name="country" class="form-control">
                        <?php foreach ($country_list as $country): ?>
                            <option value="<?php echo $country['id'] ?>">
                                <?php echo $country['Name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <input type="submit" 
                       value="เพิ่ม" 
                       name="submit" 
                       class="btn btn-primary btn-lg"/>
                <button class="btn btn-secondary btn-lg">ล้าง</button>
            </form>
        </div>
    </div>
    <div class="col-lg-3 col-md-1 col-sm-0"></div>
</div>