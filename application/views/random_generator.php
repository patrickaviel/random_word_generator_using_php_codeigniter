<?php $this->load->view('partials/header') ?>
    <div class="main-container">
        <h1>Random Word Generator</h1>
        <form action='<?=base_url('');?>' method='post'>
            <p>Random Word (attempt #<?= $this->session->userdata('counter');?>)</p>
            <h1><?= $this->session->userdata('random_word');?></h1>
            <input type='submit' value='Generate'>
        </form>
    </div>
<?php $this->load->view('partials/footer') ?>