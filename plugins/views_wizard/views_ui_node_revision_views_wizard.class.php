<?php

class ViewsUiNodeRevisionViewsWizard extends ViewsUiBaseViewsWizard {

  protected function default_display_options($form, $form_state) {
    $display_options = parent::default_display_options($form, $form_state);

    // Add permission-based access control.
    $display_options['access']['type'] = 'perm';
    $display_options['access']['perm'] = 'view revisions';

    /* Field: Node revision: Created date */
    $display_options['fields']['timestamp']['id'] = 'timestamp';
    $display_options['fields']['timestamp']['table'] = 'node_revision';
    $display_options['fields']['timestamp']['field'] = 'timestamp';
    $display_options['fields']['timestamp']['alter']['alter_text'] = 0;
    $display_options['fields']['timestamp']['alter']['make_link'] = 0;
    $display_options['fields']['timestamp']['alter']['absolute'] = 0;
    $display_options['fields']['timestamp']['alter']['trim'] = 0;
    $display_options['fields']['timestamp']['alter']['word_boundary'] = 0;
    $display_options['fields']['timestamp']['alter']['ellipsis'] = 0;
    $display_options['fields']['timestamp']['alter']['strip_tags'] = 0;
    $display_options['fields']['timestamp']['alter']['html'] = 0;
    $display_options['fields']['timestamp']['hide_empty'] = 0;
    $display_options['fields']['timestamp']['empty_zero'] = 0;

    /* Field: Node revision: Title */
    $display_options['fields']['title']['id'] = 'title';
    $display_options['fields']['title']['table'] = 'node_revision';
    $display_options['fields']['title']['field'] = 'title';
    $display_options['fields']['title']['alter']['alter_text'] = 0;
    $display_options['fields']['title']['alter']['make_link'] = 0;
    $display_options['fields']['title']['alter']['absolute'] = 0;
    $display_options['fields']['title']['alter']['trim'] = 0;
    $display_options['fields']['title']['alter']['word_boundary'] = 0;
    $display_options['fields']['title']['alter']['ellipsis'] = 0;
    $display_options['fields']['title']['alter']['strip_tags'] = 0;
    $display_options['fields']['title']['alter']['html'] = 0;
    $display_options['fields']['title']['hide_empty'] = 0;
    $display_options['fields']['title']['empty_zero'] = 0;
    $display_options['fields']['title']['link_to_node'] = 0;
    $display_options['fields']['title']['link_to_node_revision'] = 1;

    return $display_options;
  }
}
