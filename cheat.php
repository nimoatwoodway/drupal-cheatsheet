<?php

/**
 * Iterate Entities of Reference Field
 */
/** @var \Drupal\Core\Field\EntityReferenceFieldItemList $entity */
$field = $entity->get('field_references');

/** @var \Drupal\node\Entity\Node $state */
foreach ($field->referencedEntities() as $entity) {
  $entity->doSomething();
}
