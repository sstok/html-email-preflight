<?php

namespace ju1ius\Html\EmailPreflight\Warning;

use ju1ius\Html\EmailPreflight\Warning;

/**
 * 
 */
class UnsupportedAttribute extends Warning
{
  public function getMessage()
  {
    return $this->getLabel()
      . ( $this->getSupportLevel() ? " ({$this->getSupportLevel()})" : '' )
      . ' => ' . $this->getName()
      . ' HTML Attribute is unsupported in: '
      . implode(', ', $this->getClients());
  }
}
