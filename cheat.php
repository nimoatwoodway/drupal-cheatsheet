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

/**
 * Entity field query and loading
 */
if ($ids = \Drupal::entityQuery('entity_type')
  ->condition('status', 1)
  ->condition('field_xy', TRUE)
  ->execute()) {
  if ($entities = \Drupal::entityTypeManager()
    ->getStorage('entity_type')
    ->loadMultiple($ids)) {
    foreach ($entities as $key => $entity) {
      $entity->doSomething();
    }
  }
}
