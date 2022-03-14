<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{


    public function index()
    {

        $this->load->library('pagination');
        $config = [

            'base_url'       => base_url('blog/index'),
            'per_page'       => 5,
            'total_rows'     => $this->articlesmodel->numofrows_all_articles(),

            'full_tag_open'  => "<div class='pagination-numbers'>",
            'full_tag_close' => "</div>",

            'cur_tag_open'   => "<a class='page-numbers current'>",
            'cur_tag_close'  => "</a> ",

            'num_tag_open'   => "&nbsp",
            'num_tag_close'  => "&nbsp",
            'attributes'     => array('class' => 'page-numbers'),


            'next_link'      => "<span class='fa fa-angle-right'></span>",
            'prev_link'      => "<span class='fa fa-angle-left'></span>",
            'last_link' => "Last",
            'first_link' => "First",

        ];


        $this->pagination->initialize($config);
        $topfour = $this->articlesmodel->topfour();
        $next_articles = $this->articlesmodel->next_five($config['per_page'], $this->uri->segment(3));
        $mostviewed_articles = $this->articlesmodel->most_viewd_articles();
        $categories = $this->articlesmodel->category();
        $tags = $this->articlesmodel->tags();
        $this->load->view('public/articles', ['categories' => $categories, 'tags' => $tags, 'next_articles' => $next_articles, 'mostviewed_articles' => $mostviewed_articles, 'topfour' => $topfour]);
    }

    public function search_item()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('query', 'Query', 'required');

        if (!$this->form_validation->run()) {
            return redirect('blog');
        }

        $query = $this->input->post('query');
        if ($query) {
            $query1 = trim($query);
            return redirect("search/$query1");
        } else {
            return redirect("blog");
        }
    }

    public function search($query = "")
    {
        if ($query) {

            $this->load->library('pagination');
            $config = [

                'base_url'       => base_url("search/$query"),
                'per_page'       => 5,
                'total_rows'     => $this->articlesmodel->numofrows_searched_articles($query),

                'full_tag_open'  => "<div class='pagination-numbers'>",
                'full_tag_close' => "</div>",

                'cur_tag_open'   => "<a class='page-numbers current'>",
                'cur_tag_close'  => "</a> ",

                'num_tag_open'   => "&nbsp",
                'num_tag_close'  => "&nbsp",
                'attributes'     => array('class' => 'page-numbers'),


                'next_link'      => "<span class='fa fa-angle-right'></span>",
                'prev_link'      => "<span class='fa fa-angle-left'></span>",
                'last_link' => "Last",
                'first_link' => "First",

            ];


            $this->pagination->initialize($config);
            $articles = $this->articlesmodel->search($query, $config['per_page'], $this->uri->segment(3));
            $new_articles = $this->articlesmodel->topfour();
            $mostviewed_articles = $this->articlesmodel->most_viewd_articles();
            $categories = $this->articlesmodel->category();
            $tags = $this->articlesmodel->tags();
            $this->load->view('public/result', ['articles' => $articles, 'categories' => $categories, 'topfour' => $new_articles, 'most_articles' => $mostviewed_articles, 'tags' => $tags]);
        } else {
            return redirect('blog');
        }
    }


    public function article($article_slug = "")
    {
        if ($this->articlesmodel->find($article_slug)) {
            $articles = $this->articlesmodel->find($article_slug);
            $author = $this->articlesmodel->find_article_author($articles->author);
            $article_tags = $this->articlesmodel->find_article_tag($articles->id);
            $categories = $this->articlesmodel->category();
            $new_articles = $this->articlesmodel->topfour();
            $mostviewed_articles = $this->articlesmodel->most_viewd_articles();
            $tags = $this->articlesmodel->tags();
            $comments = $this->commentmodel->article_comments($articles->id);
            $related_articles = $this->articlesmodel->related_articles($articles->categories, $articles->id);
            $this->add_count($article_slug);
            $this->load->view('public/article_detail', ['article' => $articles, 'article_tags' => $article_tags, 'categories' => $categories, 'new_articles' => $new_articles, 'most_articles' => $mostviewed_articles, 'related_articles' => $related_articles, 'comments' => $comments, 'tags' => $tags, 'author' => $author]);
        } else {

            return redirect('blog');
        }
    }


    public function category($category = "")
    {
        if ($this->articlesmodel->find_category($category)) {
            $this->load->library('pagination');
            $config = [

                'base_url'       => base_url("category/$category"),
                'per_page'       => 5,
                'total_rows'     => $this->articlesmodel->numofrows_category_articles($category),

                'full_tag_open'  => "<div class='pagination-numbers'>",
                'full_tag_close' => "</div>",

                'cur_tag_open'   => "<a class='page-numbers current'>",
                'cur_tag_close'  => "</a> ",

                'num_tag_open'   => "&nbsp",
                'num_tag_close'  => "&nbsp",
                'attributes'     => array('class' => 'page-numbers'),


                'next_link'      => "<span class='fa fa-angle-right'></span>",
                'prev_link'      => "<span class='fa fa-angle-left'></span>",
                'last_link' => "Last",
                'first_link' => "First",

            ];



            $this->pagination->initialize($config);
            $articles = $this->articlesmodel->category_article($config['per_page'], $this->uri->segment(3), $category);
            $new_articles = $this->articlesmodel->topfour();
            $mostviewed_articles = $this->articlesmodel->most_viewd_articles();
            $categories = $this->articlesmodel->category();
            $tags = $this->articlesmodel->tags();
            $this->load->view('public/post', ['articles' => $articles, 'categories' => $categories, 'topfour' => $new_articles, 'most_articles' => $mostviewed_articles, 'tags' => $tags, 'category_slug' => $category]);
        } else {

            return redirect('blog');
        }
    }

    public function author($slug = "")
    {
        if ($slug) {
            $author = $this->articlesmodel->find_author($slug);
            if ($author) {
                $author_blog = $this->articlesmodel->find_author_blog($author->name);
                $this->load->view('public/author', ['author' => $author, 'author_blog' => $author_blog]);
            } else {
                return redirect('blog');
            }
        } else {
            return redirect('blog');
        }
    }
    public function tag($tags = "")
    {
        if ($tags) {
            $this->load->library('pagination');

            $config = [

                'base_url'       => base_url("blog/tag/$tags"),
                'per_page'       => 5,
                'total_rows'     => $this->articlesmodel->numofarticles_intag($tags),

                'full_tag_open'  => "<div class='pagination-numbers'>",
                'full_tag_close' => "</div>",

                'cur_tag_open'   => "<a class='page-numbers current'>",
                'cur_tag_close'  => "</a> ",

                'num_tag_open'   => "&nbsp",
                'num_tag_close'  => "&nbsp",
                'attributes'     => array('class' => 'page-numbers'),


                'next_link'      => "<span class='fa fa-angle-right'></span>",
                'prev_link'      => "<span class='fa fa-angle-left'></span>",
                'last_link' => "Last",
                'first_link' => "First",

            ];

            $this->pagination->initialize($config);
            $articles = $this->articlesmodel->searchvia_tag($tags, $config['per_page'], $this->uri->segment(4));
            $new_articles = $this->articlesmodel->topfour();
            $mostviewed_articles = $this->articlesmodel->most_viewd_articles();
            $categories = $this->articlesmodel->category();
            $tags = $this->articlesmodel->tags();
            $this->load->view('public/result', ['articles' => $articles, 'categories' => $categories, 'topfour' => $new_articles, 'most_articles' => $mostviewed_articles, 'tags' => $tags]);
        } else {

            return redirect('blog');
        }
    }

    private function add_count($article_slug)
    {

        $this->load->helper('cookie');
        $check_visitor = $this->input->cookie(urldecode($article_slug), FALSE);
        $ip = $this->input->ip_address();

        if ($check_visitor == false) {
            $cookie = array(
                "name"   => urldecode($article_slug),
                "value"  => "$ip",
                "expire" =>  time() + 3600 * 2,
                "secure" => false
            );
            $this->input->set_cookie($cookie);
            $this->articlesmodel->update_counter(urldecode($article_slug));
        }
    }
    public function add_comments()
    {

        $this->load->library('form_validation');
        if ($this->form_validation->run('comment_form_rules')) {

            $post = $this->input->post();
            $slug = $post['article_slug'];
            $this->commentmodel->add_comments($post);
            return redirect("blog/article/{$slug}");
        } else {

            $post = $this->input->post();
            $article_slug = $post['article_slug'];
            $this->article($article_slug);
        }
    }

    public function newslatter()
    {
        $this->load->library('form_validation');
        if ($this->form_validation->run('subscribe_form_rules')) {

            $post = $this->input->post();
            $this->commentmodel->add_subscriber($post);
            return redirect('blog');
        } else {
            $this->index();
        }
    }

    public function about()
    {
        $this->load->view('public/about');
    }

    public function contact($message = "")
    {
        if (!$message) {
            $this->load->view('public/contact', ['message' => null]);
        } else {
            $message = "We have got youre message. We will contact you as soon as possible.";
            $this->load->view('public/contact', ['message' => $message]);
        }
    }

    public function contact_form()
    {
        $this->load->model('contactmodel');
        $this->load->library('form_validation');
        if ($this->form_validation->run('contact_form_rules')) {
            $post = $this->input->post();
            $this->contactmodel->contact($post);
            $status = "success";
            return redirect("contact/{$status}");
        } else {

            $this->contact();
        }
    }

    public function submitarticle($message = "")
    {
        if (!$message) {
            $this->load->view('public/submitarticle', ['message' => null]);
        } else {
            $message = "We have got youre Article. Please wait while we review it.";
            $this->load->view('public/submitarticle', ['message' => $message]);
        }
    }

    public function store_article()
    {
        $this->load->model('eventmodel');
        $this->load->library('form_validation');


        $config1 = [
            'upload_path' => './uploads/event/coverimage',
            'allowed_types' => 'jpg|jpeg|png',
            'max_width'    => '1200',
            'max_height'   => '600',

        ];
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
        $cover_upload = $this->upload->do_upload('cover');
        $cover_data = $this->upload->data();
        $upload_error1 = $this->upload->display_errors();


        $config = [
            'upload_path' => './uploads/event/articles',
            'allowed_types' => 'doc|docx',

        ];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $article_upload = $this->upload->do_upload('article');
        $article_data = $this->upload->data();
        $upload_error = $this->upload->display_errors();


        if ($this->form_validation->run('event_form_rules') && $article_upload) {
            $post = $this->input->post();

            $cover_path = base_url("uploads/event/coverimage/" . $cover_data['raw_name'] . $cover_data['file_ext']);
            $article_path = base_url("uploads/event/articles/" . $article_data['raw_name'] . $article_data['file_ext']);

            $post['cover_path'] = $cover_path;
            $post['article_path'] = $article_path;

            if ($this->eventmodel->add_participant($post)) {

                //                 $this->load->library('email');
                //                 $this->email->clear();
                //                 $this->email->to($post['email']);
                //                 $this->email->from('newsletter@thetg.in','Tranzposing Gradient Newsletter');
                //                 $this->email->subject('Article Submission');
                //                 $this->email->message('Greetings from team kahaniyaa...!!!
                // Thank you so much for submitting your article for publishing in our platform.
                // Kahaniyaa is a platform for amazing writers like you and we always appreciate when people like you approach us.
                // Kahaniyaa is a moderated platform, any blogs submitted for publication goes through admin review, the submitted content are checked for plagiarism, spelling, grammar check or any offensive content. After all the checking is done your blog will be published and we will intimate you with the link to your article.

                // Happy Writing...!!!
                // Team Kahaniyaa');

                //                 if(!$this->email->send()){
                //                     show_error($this->email->print_debugger());
                //                 }
                $status = "success";
                return redirect("submitarticle/{$status}");
            } else {
                $this->submitarticle();
            }
        } else {


            $this->load->view('public/submitarticle', ['message' => null, 'upload_error' => $upload_error, 'upload_error1' => $upload_error1]);
        }
    }

    public function authorsubmitarticle($message = "")
    {
        $authors = $this->articlesmodel->authors();
        if (!$message) {
            $this->load->view('public/already_submitarticle', ['message' => null, 'authors' => $authors]);
        } else {
            $message = "We have got youre Article. Please wait while we review it.";
            $this->load->view('public/already_submitarticle', ['message' => $message, 'authors' => $authors]);
        }
    }

    public function alreadyauthor_store_article()
    {

        $this->load->model('eventmodel');
        $this->load->library('form_validation');


        $config1 = [
            'upload_path' => './uploads/event/coverimage',
            'allowed_types' => 'jpg|jpeg|png',
            'max_width'    => '1200',
            'max_height'   => '600',

        ];
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
        $cover_upload = $this->upload->do_upload('cover');
        $cover_data = $this->upload->data();
        $upload_error1 = $this->upload->display_errors();


        $config = [
            'upload_path' => './uploads/event/articles',
            'allowed_types' => 'doc|docx',

        ];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $article_upload = $this->upload->do_upload('article');
        $article_data = $this->upload->data();
        $upload_error = $this->upload->display_errors();


        if ($article_upload && $cover_upload) {
            $post = $this->input->post();

            $cover_path = base_url("uploads/event/coverimage/" . $cover_data['raw_name'] . $cover_data['file_ext']);
            $article_path = base_url("uploads/event/articles/" . $article_data['raw_name'] . $article_data['file_ext']);

            $post['cover_path'] = $cover_path;
            $post['article_path'] = $article_path;
            $email = $post['email'];
            $author = $this->articlesmodel->find_authorviaemail($email);

            $post['name'] = $author->name;
            $post['instagram'] = $author->instagram;
            $post['facebook'] = $author->facebook;
            $post['twitter'] = $author->twitter;
            $post['bio'] = $author->bio;
            if ($this->eventmodel->add_oldparticipant($post)) {

                //                 $this->load->library('email');
                //                 $this->email->clear();
                //                 $this->email->to($post['email']);
                //                 $this->email->from('newsletter@thetg.in','Tranzposing Gradient Newsletter');
                //                 $this->email->subject('Article Submission');
                //                 $this->email->message('Greetings from team kahaniyaa...!!!
                // Thank you so much for submitting your article for publishing in our platform.
                // Kahaniyaa is a platform for amazing writers like you and we always appreciate when people like you approach us.
                // Kahaniyaa is a moderated platform, any blogs submitted for publication goes through admin review, the submitted content are checked for plagiarism, spelling, grammar check or any offensive content. After all the checking is done your blog will be published and we will intimate you with the link to your article.

                // Happy Writing...!!!
                // Team Kahaniyaa');

                //                 if(!$this->email->send()){
                //                     show_error($this->email->print_debugger());
                //                 }
                $status = "success";
                return redirect("authorsubmitarticle/{$status}");
            } else {
                $this->authorsubmitarticle();
            }
        } else {

            $authors = $this->articlesmodel->authors();
            $this->load->view('public/already_submitarticle', ['message' => null, 'authors' => $authors, 'upload_error' => $upload_error, 'upload_error1' => $upload_error1]);
        }
    }


    public function tnc()
    {
        $this->load->view('public/term');
    }

    public function authors()
    {
        $authors = $this->articlesmodel->authors();
        $this->load->view('public/authors', ['authors' => $authors]);
    }

    public function ebooks()
    {
        $this->load->model('ebookmodel');
        $ebooks = $this->ebookmodel->all_ebook();
        $this->load->view('public/ebook', ['ebooks' => $ebooks]);
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('articlesmodel');
        $this->load->model('commentmodel');
        $this->load->model('socialmodel');
    }
}
