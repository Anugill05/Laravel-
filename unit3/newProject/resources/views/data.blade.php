<p>The current url is {{ url()->current()}}</p>
<p>The full url is {{ url()->full()}}</p>

<h1>The current url and requested current shows same url</h1>

<p>The requested url is {{ request()->url()}}</p>
<p>The current requested fullurl is {{ request()->fullurl()}}</p>