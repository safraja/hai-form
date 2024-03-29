let dictionary =
{
    'max-length-exceeded': `Text length must be longer than or equal to {{maxLength}}.`,
    'min-length-exceeded': `Text length must less than or equal to {{minLength}}.`,
    'mask-not-followed': `Inserted value does not match the mask.`,
    'max-files-count-exceeded': `The file could not be selected, only {{maxFilesCount}} files can by selected.`,
    'max-file-size-exceeded': `The file could not be selected because it exceeds the maximum allowed size of {{maxFileSize}}.`,
    'max-total-files-size-exceeded': `The file could not be selected because the total maximum file size of {{maxTotalSize}} was exceeded.`,
    'not-allowed-file-type': `The file could not be selected because its type is not allowed.`,
    'value-must-be-a-number': `The value entered must be a number.`,
    'max-value-exceeded': `Number must be lower or same as {{max}}.`,
    'min-value-exceeded': `Number must be higher or same as {{min}}.`,
    'min-lowercase-letters': `The entered password must contain as least {{lowercaseLetter}} lowercase letters.`,
    'min-uppercase-letters': `The entered password must contain as least {{uppercaseLetter}} uppercase letters.`,
    'min-numbers': `The entered password must contain as least {{number}} numbers.`,
    'min-special-characters': `The entered password must contain as least {{special}} special characters.`,
    'weak-password': `The entered password is too weak.`,
    'max-formatted-length': `The length of the formatted text must be less than or equal to {{maxHtmlLength}}.`,
    'value-required': `The field must not be empty.`,
    'not-allowed-scheme': `URL does not starts with allowed scheme.`,
    'host-required': `URL does not contain host address.`,
    'port-forbidden': `URL must not specify port.`,
    'path-forbidden': `URL must not contain path.`,
    'query-forbidden': `URL must not contain query.`,
    'fragment-forbidden': `URL must not contain fragment.`,
    'userinfo-forbidden': `URL must not include userinfo.`,
    'search-placeholder': `Search...`,
    'file-drop-placeholder': `Drop a file here`,
    'file-drop-second-placeholder': `or click to select`,
    'file-required': `At least one file must be selected.`
};

export { dictionary as default };