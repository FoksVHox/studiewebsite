<?php
require '_init.php';
Layout::i()->header();
Layout::i()->nav();
?>

<div class="flex flex-col h-full">
    <h1 class="text-3xl font-semibold">Har du problemer med afhængnighed af Sociale Medier?</h1>
    <p>Hvis du har problemer med afhængnighed af Sociale Medier, kan du finde hjælp her.</p>

    <div class="flex flex-row mt-5 w-full h-full space-x-2">
        <div class="bg-gray-200 w-1/2 h-full rounded-lg py-2 px-3">
            <a href="https://redbarnet.dk/sletdet/" target="_blank">
                <h2 class="text-xl font-medium">Redbarnet - SletDet</h2>
            </a>
            <strong>Gratis og fortrolig rådgivning om ubehagelig oplevelser og krænkelser på nettet</strong>
            <p>Du kan kontakte rådgiverne fra SletDet, hvis du selv er ung, eller hvis du har været vidne til, at et barn har oplevet noget ubehageligt på nettet. Det kan være, at private, grænseoverskridende eller krænkende billeder eller videoer bliver delt uden samtykke – altså uden, at man har givet lov. Det kan også handle om andre ubehagelige oplevelser, som mobning, hacking eller stalking. Hos SletDet kan du få hjælp og råd til, hvordan du håndterer situationen og får stoppet de digitale krænkelser.</p>
            <a href="https://redbarnet.dk/sletdet/" class="text-blue-500 font-medium">Redbarnet - SletDet</a>
        </div>
        <div class="bg-gray-200 w-1/2 h-full rounded-lg py-2 px-3">
            <h2 class="text-xl font-medium">Kontakt os</h2>
            <div class="mt-4">
                <form action="#" method="post">
                        <div class="flex space-x-2">
                            <div class="w-1/2">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">
                                    Dit navn
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">
                                    Din email
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="email" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="jd@example.net">
                                </div>
                            </div>
                        </div>
                        <div class="w-full mt-4 mb-4">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Emne
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Skriv din besked">
                            </div>
                        </div>
                        <label for="company_website" class="block text-sm font-medium text-gray-700">
                            Besked
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Skriv om dit problem her"></textarea>
                        </div>
                    <button class="rounded-md bg-gray-800 mt-4 text-white p-2">Send!</button>
                </form>

                <div class="bg-red-500 rounded-lg">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:py-8 lg:px-8">
                        <h1><strong>DISCLAIMER:</strong></h1>
                        Denne formular virker ikke, og denne side er et skole projekt, derfor kan du ikke modtage nogen form for hjælp her. Vi råder til at kontakte en der hjælpe dig.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
Layout::i()->footer();
?>
