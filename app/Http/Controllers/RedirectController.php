<?php

namespace App\Http\Controllers;

class RedirectController extends Controller
{
    protected $filenamesMap = [
        'TBX-WhitePaper-Eng.pdf'            => 'Tokenbox-WhitePaper-En.pdf',
        'TBX-WhitePaper-En.pdf'            => 'Tokenbox-WhitePaper-En.pdf',
        'TBX-WhitePaper-Rus.pdf'            => 'Tokenbox-WhitePaper-Ru.pdf',
        'Tokenbox-BusinessOverview-Eng.pdf' => 'Tokenbox-BusinessOverview-En.pdf',
        'Tokenbox-BusinessOverview-Rus.pdf' => 'Tokenbox-BusinessOverview-Ru.pdf',
        'Tokenbox-Overview-Eng.pdf'         => 'Tokenbox-Overview-En.pdf',
        'Tokenbox-Overview-Rus.pdf'         => 'Tokenbox-Overview-Ru.pdf',
        'Tokenbox-Onepager-Eng.pdf'         => 'Tokenbox-Onepager-En.pdf',
        'Tokenbox-OnepagerPS-Eng.pdf'       => 'Tokenbox-OnepagerPS-En.pdf',
        'Tokenbox-Presentation-Eng.pdf'       => 'Tokenbox-Presentation-En.pdf',
    ];

    public function go($filename)
    {
        if ($toFile = array_get($this->filenamesMap, $filename)) {
            return redirect(sprintf("/docs/%s", $toFile));
        }
    }

}