<h6>Subjects Related to <?php print $title; ?></h6>
<div class="subjects-in-places kmaps-list-columns">
  <?php if(count($data) > 0): ?>
    <h6>FEATURE TYPES:</h6>
    <ul>
      <?php foreach($data as $aItem => $aItemValue): ?>
        <li>
          <span><?php print $aItemValue->block_child_type[0] == 'feature_types' ? $aItemValue->feature_type_title_s : $aItemValue->related_subject_title_s; ?></span>
          <span class="popover-kmaps" data-app="subjects" data-id="<?php print $aItemValue->block_child_type[0] == 'feature_types' ? $aItemValue->feature_type_id_i : $aItemValue->related_subject_category_id_i; ?>">
            <span class="popover-kmaps-tip"></span>
            <span class="icon shanticon-menu3"></span>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>