<?php
class navigation_ext extends navigation_ext_parent
{
    
    public function cleartmp()
    {
        $aFiles = glob('../tmp/*');
        foreach($aFiles as $file) { unlink($file); }
    }
}
