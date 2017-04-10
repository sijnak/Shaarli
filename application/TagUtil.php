<?php
/**
 *
 */
class TagUtil
{
    private $separators;
    
    private $default_separator;
    
    /** 
     * Creates a new tag utility object
     * 
     * @param string separators all separators
     * @param string default_separator
     */
    public function __construct($separators, $default_separator) {
        $this->separators = $separators;
        $this->default_separator = $default_separator;
    }
    
    public function parseTags($tagString) {
        // empty string means empty array of tags
        if (empty($tagString))
            return array();

        $tagString = escape($tagString);
        // Remove spaces and tag separators at beginning and end of string.
        $tagString = trim($tagString, $this->separators." ");
        // Remove multiple spaces.
        $tagString = preg_replace('/\s\s+/', ' ', $tagString);
        // Remove first '-' char in tags.
        $tagString = preg_replace('/(^| )\-/', '$1', $tagString);
        // Split and remove duplicates.
        $tags = array_unique(preg_split('/\s*['.$this->separators.']+\s*/', $tagString, -1, PREG_SPLIT_NO_EMPTY));
    
        return $tags;
    }

    public function serializeTags($tags) {
        return implode($this->default_separator.' ', $tags);
    }
    
}
?>