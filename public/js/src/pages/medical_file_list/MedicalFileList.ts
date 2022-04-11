const SELECTOR_DELETE_MODAL = '#deleteMedicalFileModal';
const SELECTOR_DELETE_LINK = '.js-delete-medical-file';
const SELECTOR_FORM = '#delete-medical-file-form';
const SELECTOR_FULL_NAME = '.js-medical-file-full-name';
const SELECTOR_INPUT_ID = 'input[name="medical-file-id"]';
const SELECTOR_CANCEL_BUTTON = '.js-btn-cancel';

export default class MedicalFileList {
    private $modal: any;
    private $deleteLink: JQuery<HTMLAnchorElement>;
    private $form: JQuery<HTMLFormElement>;
    private $cancelButton: JQuery<HTMLButtonElement>;

    constructor() {
        this.$modal = $(SELECTOR_DELETE_MODAL);
        this.$deleteLink = $(SELECTOR_DELETE_LINK);
        this.$cancelButton = $(SELECTOR_CANCEL_BUTTON);
        this.$form = $(SELECTOR_FORM);
    }

    private bindEvent() {
        this.$deleteLink.on('click', event => {
            const id = $(event.currentTarget).data('medical-file-id');
            const fullName = $(event.currentTarget).data('medical-file-name');
            this.handleDelete(id, fullName);
        });
        this.$cancelButton.on('click', event => {
            event.preventDefault();
            this.handleCancel();
        });
    }

    private handleDelete(id: string, fullName: string) {
        this.$modal.find(SELECTOR_FULL_NAME).text(fullName);
        this.$form.find(SELECTOR_INPUT_ID).attr('value', id);
        this.$modal.modal('show');
    }

    private handleCancel() {
        this.$modal.modal('hide');
    }

    public render() {
        this.bindEvent();
    }
}
