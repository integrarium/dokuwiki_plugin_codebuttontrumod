<?php
/**
 * DokuWiki Plugin codebuttontrumod (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Alexey Trushnikov <integrarium@gmail.com>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {    die(); }
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
require_once (DOKU_PLUGIN . 'action.php');


class action_plugin_codebuttontrumod extends DokuWiki_Action_Plugin
{

    /**
     * Return some info
     */
    function getInfo() {
        return array (
            'author' => 'Trushnikov Alexey',
            'date' => '2019-08-04',
            'name' => 'Toolbar Code Button',
            'desc' => 'Inserts a code button into the toolbar',
            'url' => 'https://github.com/integrarium/dokuwiki_plugin_codebuttontrumod/',
        );
    }
 
    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     *
     * @return void
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array ());
   
    }

    /**
     * Inserts the toolbar button
     */
    function insert_button(& $event, $param) {
        $event->data[] = array (
            'type' => 'format',
            'title' => $this->getLang('insertcode'),
            'icon' => '../../plugins/codebuttontrumod/image/code.png',
            'open' => '<code | download>\n',
            'close' => '\n</code>',
        );
    }
 
 /**
     * [Custom event handler which performs action]
     *
     * Called for event:
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     *
     * @return void
     */

}

