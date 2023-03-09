<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Boolando',
                'content' => "Progetto che replica il layout e lo stile grafico della sezione di prodotti di Zalando utilizzando HTML e CSS. In particolare, il progetto è concentrato sulla creazione di una griglia di card di prodotti, simile a quella presente nella pagina principale di Zalando. Sono stati utilizzati anche un'ampia varietà di stili CSS, come font personalizzati, colori accattivanti, sfondi e bordi eleganti. Le card di prodotto saranno composte da un'immagine, nome del prodotto, marca, prezzo e eventuale sconto. Inoltre, è presente anche un'animazione di effetto hover per evidenziare il prodotto selezionato dall'utente.",
                'link_github' => 'https://github.com/FedericoGuadagnoli/html-css-boolando.git',
            ],
            [
                'title' => 'Boolzap',
                'content' => "Il progetto consiste nella creazione di una pagina web che replichi il layout e lo stile grafico di WhatsApp Web utilizzando il framework Vue.js. In particolare, il progetto consiste sulla creazione di una sidebar laterale di sinistra con i contatti dell'utente e su come cliccare su ogni contatto aprirà la chat personale nel resto della pagina. La pagina sarà caratterizzata da un design moderno e pulito, con una sidebar laterale di sinistra contenente la lista dei contatti dell'utente. La lista dei contatti sarà visualizzata come una serie di elementi nella sidebar, con il nome dell'utente e un'immagine di profilo. Utilizzeremo anche un'ampia varietà di stili CSS, come font personalizzati, colori accattivanti, sfondi e bordi eleganti. Quando l'utente seleziona un contatto dalla sidebar, la chat personale si aprirà nel resto della pagina. La chat personale sarà composta da un'area di scrittura e di visualizzazione dei messaggi, con una serie di messaggi precedenti in ordine cronologico. Per replicare il layout di WhatsApp Web, è stato utilizzato il framework Vue.js per creare i componenti della sidebar e della chat personale, in modo da rendere il codice più modulare e facile da gestire. Infine, vengono utilizzate anche tecniche di ottimizzazione del sito, come la riduzione della dimensione del codice HTML e CSS, per garantire una migliore esperienza utente e tempi di caricamento rapidi. In questo modo, è stata creata un'esperienza utente che riproduce fedelmente la funzionalità e il design di WhatsApp Web, ma implementata utilizzando Vue.js.",
                'link_github' => 'https://github.com/FedericoGuadagnoli/vue-boolzapp.git',
            ],
            [
                'title' => 'DC-Comics',
                'content' => "Il progetto consiste nella creazione di un'applicazione web che replichi il sito DC Comics, utilizzando il framework Laravel. In particolare, ci concentreremo sulla creazione della homepage e sulla gestione delle operazioni CRUD (Create, Read, Update, Delete) per le card dei fumetti. La homepage dell'applicazione web replica il design della homepage del sito DC Comics, con una serie di card che rappresentano i fumetti. E' stato utilizzato Saas per creare le card, utilizzando immagini e informazioni dei fumetti, come il titolo e l'autore. Quando l'utente seleziona una card, verrà visualizzata la pagina di dettaglio del fumetto, dove potrà visualizzare maggiori informazioni sul fumetto selezionato. Utilizzeremo Laravel per creare le pagine di dettaglio, recuperando le informazioni dal database e visualizzandole tramite il framework Blade. Inoltre, sono presenti operazioni CRUD sulle card dei fumetti. Per la gestione delle operazioni CRUD, utilizzeremo Laravel per creare le funzionalità di creazione, lettura, aggiornamento e cancellazione delle card dei fumetti. In questo modo, si potranno aggiungere nuove card, modificare le informazioni esistenti e cancellare le card inutilizzate.",
                'link_github' => 'https://github.com/FedericoGuadagnoli/laravel-dc-comics.git',
            ],
            [
                'title' => 'Spotify',
                'content' => "Il progetto consiste nella creazione di una pagina web che replica l'interfaccia utente di Spotify utilizzando il framework Vue. In particolare, il progetto consiste in una pagina che visualizza una serie di card contenenti informazioni sui brani musicali, come l'immagine, l'autore, il titolo del brano e la data di uscita. Per realizzare il progetto, utilizzeremo l'API di Spotify per recuperare le informazioni sui brani musicali. Utilizzeremo quindi Axios per effettuare le chiamate API e recuperare i dati in formato JSON. Utilizzeremo Vue per visualizzare i dati recuperati, utilizzando un componente di Vue per creare le card dei brani musicali. Per la visualizzazione delle card dei brani musicali, è stato utilizzato il framework Bootstrap per creare un layout responsive.",
                'link_github' => 'https://github.com/FedericoGuadagnoli/php-dischi-json.git',
            ]
        ];

        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->fill($project);
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->save();
        }
    }
}
