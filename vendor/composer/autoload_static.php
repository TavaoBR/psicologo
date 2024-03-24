<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9fb37b34127adaa3c764954561afb8c8
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '40a7870d0d546b26081e5c6052031651' => __DIR__ . '/../..' . '/helpers/sessionsHelpers.php',
        'c1843bde4d8a2f52bee493123897219e' => __DIR__ . '/../..' . '/helpers/userHelpers.php',
        '6e68b86dcdcd54c0148679e6866b1128' => __DIR__ . '/../..' . '/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Src\\' => 4,
            'Server\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src',
        ),
        'Server\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Server',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Config\\TemplateConfig' => __DIR__ . '/../..' . '/App/Config/TemplateConfig.php',
        'App\\Controller\\Agenda\\AgendaController' => __DIR__ . '/../..' . '/App/Controller/Agenda/AgendaController.php',
        'App\\Controller\\Error\\ErrorController' => __DIR__ . '/../..' . '/App/Controller/Error/ErrorController.php',
        'App\\Controller\\Paciente\\PacienteController' => __DIR__ . '/../..' . '/App/Controller/Paciente/PacienteController.php',
        'App\\Controller\\Usuario\\UsuarioController' => __DIR__ . '/../..' . '/App/Controller/Usuario/UsuarioController.php',
        'CoffeeCode\\Router\\Dispatch' => __DIR__ . '/..' . '/coffeecode/router/src/Dispatch.php',
        'CoffeeCode\\Router\\Router' => __DIR__ . '/..' . '/coffeecode/router/src/Router.php',
        'CoffeeCode\\Router\\RouterTrait' => __DIR__ . '/..' . '/coffeecode/router/src/RouterTrait.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'League\\Plates\\Engine' => __DIR__ . '/..' . '/league/plates/src/Engine.php',
        'League\\Plates\\Exception\\TemplateNotFound' => __DIR__ . '/..' . '/league/plates/src/Exception/TemplateNotFound.php',
        'League\\Plates\\Extension\\Asset' => __DIR__ . '/..' . '/league/plates/src/Extension/Asset.php',
        'League\\Plates\\Extension\\ExtensionInterface' => __DIR__ . '/..' . '/league/plates/src/Extension/ExtensionInterface.php',
        'League\\Plates\\Extension\\URI' => __DIR__ . '/..' . '/league/plates/src/Extension/URI.php',
        'League\\Plates\\Template\\Data' => __DIR__ . '/..' . '/league/plates/src/Template/Data.php',
        'League\\Plates\\Template\\Directory' => __DIR__ . '/..' . '/league/plates/src/Template/Directory.php',
        'League\\Plates\\Template\\FileExtension' => __DIR__ . '/..' . '/league/plates/src/Template/FileExtension.php',
        'League\\Plates\\Template\\Folder' => __DIR__ . '/..' . '/league/plates/src/Template/Folder.php',
        'League\\Plates\\Template\\Folders' => __DIR__ . '/..' . '/league/plates/src/Template/Folders.php',
        'League\\Plates\\Template\\Func' => __DIR__ . '/..' . '/league/plates/src/Template/Func.php',
        'League\\Plates\\Template\\Functions' => __DIR__ . '/..' . '/league/plates/src/Template/Functions.php',
        'League\\Plates\\Template\\Name' => __DIR__ . '/..' . '/league/plates/src/Template/Name.php',
        'League\\Plates\\Template\\ResolveTemplatePath' => __DIR__ . '/..' . '/league/plates/src/Template/ResolveTemplatePath.php',
        'League\\Plates\\Template\\ResolveTemplatePath\\NameAndFolderResolveTemplatePath' => __DIR__ . '/..' . '/league/plates/src/Template/ResolveTemplatePath/NameAndFolderResolveTemplatePath.php',
        'League\\Plates\\Template\\ResolveTemplatePath\\ThemeResolveTemplatePath' => __DIR__ . '/..' . '/league/plates/src/Template/ResolveTemplatePath/ThemeResolveTemplatePath.php',
        'League\\Plates\\Template\\Template' => __DIR__ . '/..' . '/league/plates/src/Template/Template.php',
        'League\\Plates\\Template\\Theme' => __DIR__ . '/..' . '/league/plates/src/Template/Theme.php',
        'PHPMailer\\PHPMailer\\DSNConfigurator' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/DSNConfigurator.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Server\\Start' => __DIR__ . '/../..' . '/Server/Start.php',
        'Server\\Web\\Routers' => __DIR__ . '/../..' . '/Server/Web/Routers.php',
        'Src\\Database\\Config\\ConfigDatabase' => __DIR__ . '/../..' . '/Src/Database/Config/ConfigDatabase.php',
        'Src\\Database\\Config\\Database' => __DIR__ . '/../..' . '/Src/Database/Config/Database.php',
        'Src\\Database\\Data\\Agenda\\Insert' => __DIR__ . '/../..' . '/Src/Database/Data/Agenda/Insert.php',
        'Src\\Database\\Data\\Agenda\\Select' => __DIR__ . '/../..' . '/Src/Database/Data/Agenda/Select.php',
        'Src\\Database\\Data\\Agenda\\Update' => __DIR__ . '/../..' . '/Src/Database/Data/Agenda/Update.php',
        'Src\\Database\\Data\\Paciente\\Insert' => __DIR__ . '/../..' . '/Src/Database/Data/Paciente/Insert.php',
        'Src\\Database\\Data\\Paciente\\Select' => __DIR__ . '/../..' . '/Src/Database/Data/Paciente/Select.php',
        'Src\\Database\\Data\\Paciente\\Update' => __DIR__ . '/../..' . '/Src/Database/Data/Paciente/Update.php',
        'Src\\Database\\Data\\Usuario\\Insert' => __DIR__ . '/../..' . '/Src/Database/Data/Usuario/Insert.php',
        'Src\\Database\\Data\\Usuario\\Select' => __DIR__ . '/../..' . '/Src/Database/Data/Usuario/Select.php',
        'Src\\Database\\Data\\Usuario\\Update' => __DIR__ . '/../..' . '/Src/Database/Data/Usuario/Update.php',
        'Src\\Database\\Migrations\\Agenda' => __DIR__ . '/../..' . '/Src/Database/Migrations/Agenda.php',
        'Src\\Database\\Migrations\\Paciente' => __DIR__ . '/../..' . '/Src/Database/Migrations/Paciente.php',
        'Src\\Database\\Migrations\\Usuario' => __DIR__ . '/../..' . '/Src/Database/Migrations/Usuario.php',
        'Src\\Model\\Agenda\\Create' => __DIR__ . '/../..' . '/Src/Model/Agenda/Create.php',
        'Src\\Model\\Agenda\\Read' => __DIR__ . '/../..' . '/Src/Model/Agenda/Read.php',
        'Src\\Model\\Agenda\\Update' => __DIR__ . '/../..' . '/Src/Model/Agenda/Update.php',
        'Src\\Model\\Paciente\\Create' => __DIR__ . '/../..' . '/Src/Model/Paciente/Create.php',
        'Src\\Model\\Paciente\\Read' => __DIR__ . '/../..' . '/Src/Model/Paciente/Read.php',
        'Src\\Model\\Paciente\\Update' => __DIR__ . '/../..' . '/Src/Model/Paciente/Update.php',
        'Src\\Model\\Usuario\\Create' => __DIR__ . '/../..' . '/Src/Model/Usuario/Create.php',
        'Src\\Model\\Usuario\\Read' => __DIR__ . '/../..' . '/Src/Model/Usuario/Read.php',
        'Src\\Model\\Usuario\\Update' => __DIR__ . '/../..' . '/Src/Model/Usuario/Update.php',
        'Src\\Response\\Agenda\\Cadastrar' => __DIR__ . '/../..' . '/Src/Response/Agenda/Cadastrar.php',
        'Src\\Response\\Agenda\\Editar' => __DIR__ . '/../..' . '/Src/Response/Agenda/Editar.php',
        'Src\\Response\\Agenda\\Lista' => __DIR__ . '/../..' . '/Src/Response/Agenda/Lista.php',
        'Src\\Response\\Paciente\\Avatar' => __DIR__ . '/../..' . '/Src/Response/Paciente/Avatar.php',
        'Src\\Response\\Paciente\\Cadastrar' => __DIR__ . '/../..' . '/Src/Response/Paciente/Cadastrar.php',
        'Src\\Response\\Paciente\\CadastrarAnamnese' => __DIR__ . '/../..' . '/Src/Response/Paciente/CadastrarAnamnese.php',
        'Src\\Response\\Paciente\\CadastrarResponsavel' => __DIR__ . '/../..' . '/Src/Response/Paciente/CadastrarResponsavel.php',
        'Src\\Response\\Paciente\\CriarSessao' => __DIR__ . '/../..' . '/Src/Response/Paciente/CriarSessao.php',
        'Src\\Response\\Paciente\\FimSessao' => __DIR__ . '/../..' . '/Src/Response/Paciente/FimSessao.php',
        'Src\\Response\\Usuario\\Login' => __DIR__ . '/../..' . '/Src/Response/Usuario/Login.php',
        'Src\\Response\\Usuario\\Temas' => __DIR__ . '/../..' . '/Src/Response/Usuario/Temas.php',
        'Src\\Services\\Cpf' => __DIR__ . '/../..' . '/Src/Services/Cpf.php',
        'Src\\Services\\Datas' => __DIR__ . '/../..' . '/Src/Services/Datas.php',
        'Src\\Services\\Mail' => __DIR__ . '/../..' . '/Src/Services/Mail.php',
        'Src\\Services\\TokenUser' => __DIR__ . '/../..' . '/Src/Services/TokenUser.php',
        'Src\\Services\\VariaveisForm' => __DIR__ . '/../..' . '/Src/Services/VariaveisForm.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsPairStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FFICaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FFICaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FiberCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FiberCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/GmpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImagineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImgStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImgStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/IntlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\MysqliCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MysqliCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RdKafkaCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ScalarStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ScalarStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\UninitializedStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/UninitializedStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/UuidCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Internal\\NoDefault' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Internal/NoDefault.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/..' . '/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextualizedDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ServerDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/..' . '/symfony/var-dumper/Server/Connection.php',
        'Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/..' . '/symfony/var-dumper/Server/DumpServer.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9fb37b34127adaa3c764954561afb8c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9fb37b34127adaa3c764954561afb8c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9fb37b34127adaa3c764954561afb8c8::$classMap;

        }, null, ClassLoader::class);
    }
}
