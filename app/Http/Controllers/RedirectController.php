<?php

namespace App\Http\Controllers;

class RedirectController extends Controller
{
    protected $filenamesMap = [
        'TBX-WhitePaper-Eng.pdf'            => 'Tokenbox-WhitePaper-En.pdf',
        'TBX-WhitePaper-Rus.pdf'            => 'Tokenbox-WhitePaper-Ru',
        'Tokenbox-BusinessOverview-Eng.pdf' => 'Tokenbox-BusinessOverview-En',
        'Tokenbox-BusinessOverview-Rus.pdf' => 'Tokenbox-BusinessOverview-Ru',
        'Tokenbox-Overview-Eng.pdf'         => 'Tokenbox-Overview-En',
        'Tokenbox-Overview-Rus.pdf'         => 'Tokenbox-Overview-Ru',
        'Tokenbox-Onepager-Eng.pdf'         => 'Tokenbox-Onepager-En',
        'Tokenbox-OnepagerPS-Eng.pdf'       => 'Tokenbox-OnepagerPS-En',
    ];

    public function go($filename)
    {
        if ($toFile = array_get($this->filenamesMap, $filename)) {
            return redirect(sprintf("/docs/%s", $toFile));
        }
    }

}