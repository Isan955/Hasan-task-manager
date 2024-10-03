public function __construct()
{
    $this->middleware('task.owner')->only(['edit', 'destroy']);
}
