<?php namespace EvolutionCMS\Controllers;

use EvolutionCMS\Models;
use EvolutionCMS\Interfaces\ManagerTheme;

class SiteSchedule extends AbstractController implements ManagerTheme\PageControllerInterface
{
    protected $view = 'page.site_schedule';

    /**
     * {@inheritdoc}
     */
    public function canView(): bool
    {
        return $this->managerTheme->getCore()->hasPermission('view_eventlog');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameters(array $params = []): array
    {
        $pub = $this->publishDocuments();
        $unPub = $this->unPublishDocuments();

        return [
            'publishedDocs' => $pub,
            'unpublishedDocs' => $unPub,
            'allDocs' => $pub->merge($unPub)
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function publishDocuments()
    {
        return Models\SiteContent::where('pub_date', '>', $this->managerTheme->getCore()->timestamp())
            ->orderBy('pub_date', 'asc')
            ->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function unPublishDocuments()
    {
        return Models\SiteContent::where('unpub_date', '>', $this->managerTheme->getCore()->timestamp())
            ->orderBy('unpub_date', 'asc')
            ->get();
    }
}
