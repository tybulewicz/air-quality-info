<div class="form-group form-check">
<input
    type="checkbox"
    class="form-check-input"
    name="<?php echo $this->name ?>"
    id="<?php echo $this->name ?>Input"
    value="1"
    <?php if ($this->value) echo "checked"; ?>
    <?php echo $this->getAttributesString() ?>>

<?php if ($this->label): ?>
<label class="form-check-label" for="<?php echo $this->name ?>Input"><?php echo $this->label ?></label>
<?php endif ?>

<?php if ($this->description): ?><span class="help-block"><?php echo $this->description ?></span><?php endif ?>

<?php if ($this->validationMessage): ?><div class="invalid-feedback"><?php echo $this->validationMessage ?></div><?php endif ?>
</div>