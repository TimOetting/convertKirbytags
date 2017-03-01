<?php 
class TextWithTags extends KirbytextAbstract {
    public function parse() {

      if(!$this->field) return '';

      $text = $this->field->value;

      // pre filters
      foreach(static::$pre as $filter) {
        $text = call_user_func_array($filter, array($this, $text));
      }

      // tagsify
      $text = preg_replace_callback('!(?=[^\]])\([a-z0-9_-]+:.*?\)!is', array($this, 'tag'), $text);

      // post filters
      foreach(static::$post as $filter) {
        $text = call_user_func_array($filter, array($this, $text));
      }

      return $text;

    }
}

field::$methods['convertKirbytags'] = function($field) {
  $field->value = (string)new TextWithTags($field);
  return $field;
};
