<?php
namespace Elementor;

class Proyectos_Widget extends Widget_Base {

    public function get_name() {
        return 'proyectos'
    }

    public function get_title() {
        return _('Proyectos', 'proyectos-add-on');
    }

    public function get_icon() {
        return 'eicon-folder-o';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_title',
            [
                'label' => _( 'Content', 'proyectos-elementor-add-on' ),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => _( 'Título', 'proyectos-elementor-add-on'),
                'label_block' => true;
                'type' => Controls_Manager::TEXT;
                'placeholder' => _( 'Ingrese su título', 'proyectos-elementor-add-on' ),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => _( 'Sub-título', 'proyectos-elementor-add-on'),
                'label_block' => true;
                'type' => Controls_Manager::TEXT;
                'placeholder' => _( 'Ingrese su subtítulo', 'proyectos-elementor-add-on' ),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => _( 'Link', 'proyectos-elementor-add-on'),
                'label_block' => true;
                'type' => Controls_Manager::URL;
                'placeholder' => _( 'https://www.ejemplo.com', 'proyectos-elementor-add-on' ),
                'default' => [
                    'url' => '',
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $url = $settings['link']['url'];
        echo "<a href='$url'><div class 'title'>$settings[title]</div> <div class='subtitle'>$settings[subtitle]</div></a>";
    }

    protected function _content_template() {}

}

