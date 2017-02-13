<h6><?php print 'Subjects Related to ' . $title; ?></h6>
<div class="subjects-in-subjects kmaps-list-columns">
  <?php foreach($data as $aItem => $aItemValue): ?>
    <h6><?php print $title; ?> <?php print $aItem; ?> (<?php print count($aItemValue); ?>):</h6>
    <ul>
      <?php foreach($aItemValue as $bItem => $bItemValue): ?>
        <li>
          <span><?php print $bItemValue->related_subjects_header_s; ?></span>
          <span class="popover-kmaps" data-app="subjects" data-id="<?php print explode("-", $bItemValue->related_subjects_id_s)[1]; ?>">
            <span class="popover-kmaps-tip"></span>
            <span class="icon shanticon-menu3"></span>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
</div>
