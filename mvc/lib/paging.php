<?php class paging
{
    public $limit;
    public $offset;
    public $basepath;
    public $totalRecords;
    public $totalPages;
    public $currentPage;
    function __construct($basepath, $totalRecords, $limit, $offset)
    {
        $this->basepath = $basepath;
        $this->totalRecords = $totalRecords;
        $this->limit = $limit;
        $this->offset = $offset;

        $this->totalPages = ceil($this->totalRecords / $this->limit);
        $this->currentPage = ceil(($this->offset + 1) / $this->limit);
    }
    function createLinks()
    {
        $htmlText = '<nav aria-label="Page navigation example">';
        $htmlText .= '<ul class="pagination">';
        //Xuất ra link previous, first
        if ($this->currentPage != 1) {
            $htmlText .= '<li class="page-item"><a class="page-link text-danger" href="' . BASE_URL . $this->basepath . $this->limit . '/0' . '">First</a></li>';
            $htmlText .= '<li class="page-item"><a class="page-link text-danger" href="' . BASE_URL . $this->basepath . $this->limit . '/' . ($this->currentPage - 2) * $this->limit . '">Previous</a></li>';
        }
        //xuất ra link tới các trang
        for ($i = 1; $i <= $this->totalPages; $i++)
            if ($i == $this->currentPage)
                $htmlText .= '<li class="page-item"><a class="page-link text-danger" href="' . BASE_URL . $this->basepath . $this->limit . '/' . ($i - 1) * $this->limit . '">' . $i . '</a></li>';
            else
                $htmlText .= '<li class="page-item"><a class="page-link" href="' . BASE_URL . $this->basepath . $this->limit . '/' . ($i - 1) * $this->limit . '">' . $i . '</a></li>';

        //xuất ra các trang next và last
        if ($this->currentPage != $this->totalPages) {
            $htmlText .= '<li class="page-item"><a class="page-link text-danger" href="' . BASE_URL . $this->basepath . $this->limit . '/' . $this->currentPage * $this->limit . '">Next</a></li>';
            $htmlText .= '<li class="page-item"><a class="page-link text-danger" href="' . BASE_URL . $this->basepath . $this->limit . '/' . ($this->totalPages - 1) * $this->limit . '">Last</a></li>';
        }
        //
        $htmlText .= '</ul>';
        $htmlText .= '</nav>';
        echo $htmlText;
    }
}
