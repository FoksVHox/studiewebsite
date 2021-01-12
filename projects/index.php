<?php
    $title = 'Forløb';
    include_once '../includes/nav.php';
?>

<div class="px-2 py-4 flex space-x-2">
    <a href="../skema.pdf">

        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-200">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Website</div>
                <p class="text-gray-700 text-base">
                    Dokumentation om siden
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#billeder</span>
                <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#jgp</span>
                <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#png</span>
            </div>
        </div>

    </a>
    <a href="./infosite/index.php">

        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-200">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Infosite</div>
                <p class="text-gray-700 text-base">
                    Infosite om SoMe
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#website</span>
                <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#if-c</span>
                <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#some</span>
            </div>
        </div>

    </a>
</div>

<?php
    include_once '../includes/footer.php';
?>
