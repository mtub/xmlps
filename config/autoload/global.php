<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'view_manager' => array(
        'display_not_found_reason' => false,
        'display_exceptions' => false,
    ),
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => '',
                    'password' => '',
                    'dbname' => 'xmlps',
                    'charset' => 'utf8',
                    'driverOptions' => array(1002 => 'SET NAMES utf8')
                ),
            ),
        ),
        'configuration' => array(
            'orm_default' => array(
                'proxy_dir' => 'var/doctrine/DoctrineORMModule/Proxy'
            ),
        ),
    ),
    'cache' => array(
        'adapter' => array(
            'name' => 'filesystem'
        ),
        'options' => array(
            'cache_dir' => 'var/cache/',
            'ttl' => '86400',
        ),
    ),
    'log' => array(
        'level' => 6,
    ),
    'notification' => array(
        'adminEmail' => 'axfelix@gmail.com',
    ),
    'conversion' => array(
        'docx' => array(
            'unoconv' => array(
                'command' => '/opt/libreoffice4.2/program/python vendor/dagwieers/unoconv/unoconv',
            ),
        ),
        'nlmxml' => array(
            'metypeset' => array(
                'command' => 'vendor/MartinPaulEve/meTypeset/bin/meTypeset.py',
            ),
        ),
        'references' => array(
            'parscit' => array(
                'command' => 'vendor/MichaelThessel/ParsCit/bin/citeExtract.pl',
                'xsl' => 'module/ReferencesConversion/assets/parsCit.xsl',
            ),
        ),
        'bibtex' => array(
            'xml2bib' => array(
                'command' => 'xml2bib',
            ),
        ),
        'bibtexreferences' => array(
            'biblatex2xml' => array(
                'command' => 'biblatex2xml',
                'xsl' => 'module/BibtexreferencesConversion/assets/biblatex2xml.xsl',
            ),
        ),
        'html' => array(
            'xsl' => 'module/HtmlConversion/assets/html.xsl',
            'html_includes' => 'module/HtmlConversion/assets/html',
        ),
        'pdf' => array(
            'wkhtmltopdf' => array(
                'command' => 'module/PdfConversion/assets/wkhtmltopdf-0.11.0_rc1-amd64',
            ),
        ),
        'citationstyle' => array(
            'citationstyles' => array(
                'repository' => 'vendor/citation-style-language/styles',
            ),
            'pandoc' => array(
                'command' => 'pandoc',
            ),
        ),
        'xmp' => array(
            'exiftool' => array(
                'command' => 'exiftool',
            ),
        ),
    ),
);
